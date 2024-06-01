<?php

namespace Letalandroid\controllers;
use Letalandroid\model\Database;
use PDO;
use PDOException;

require_once __DIR__ . '/../model/db.php';

class Tareas {
    static function read()
    {
        try {

            $db = new Database();

            $query = $db->connect()->prepare('select * from tareas;');
            $query->execute();

            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }
}