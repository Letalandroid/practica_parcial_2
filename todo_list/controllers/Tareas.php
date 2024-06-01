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

    static function getDataId($id)
    {
        try {

            $db = new Database();

            $query = $db->connect()->prepare('select * from tareas where tarea_id=?;');
            $query->bindParam(1, $id, PDO::PARAM_INT);
            $query->execute();

            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }

    static function add($desc)
    {
        try {

            $db = new Database();

            $query = $db->connect()->prepare('insert into tareas (descripcion) values (?);');
            $query->bindParam(1, $desc, PDO::PARAM_STR);
            $query->execute();

            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }

    static function delete($id)
    {
        try {

            $db = new Database();

            $query = $db->connect()->prepare('delete from tareas where tarea_id=?');
            $query->bindParam(1, $id, PDO::PARAM_INT);
            $query->execute();

            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }
}