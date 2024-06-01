<?php

namespace Letalandroid\model;

use PDO;
use Exception;

// no require, solo namespace y run
// $db = new Databse

class Database
{
    private string $host;

    private string $port;

    private string $db;

    private string $user;

    private string $password;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->port = 3306;
        $this->db = 'p_2';
        $this->user = 'letalandroid'; // user_default='root'
        $this->password = 'root'; // password_default=''
    }

    public function connect()
    {
        try {
            $connection = "mysql:host={$this->host};port={$this->port};dbname={$this->db}";

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            return new PDO($connection, $this->user, $this->password, $options);
        } catch (Exception $ex) {
            throw new Exception("Error en la conexión a la base de datos. $ex");
        }
    }
}
