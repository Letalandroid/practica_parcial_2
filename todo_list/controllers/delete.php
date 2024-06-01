<?php

require_once './Tareas.php';
use Letalandroid\controllers\Tareas;

$con = new Tareas();

$id = $_GET['id'];

$add = $con->delete($id);

header('Location: /');
