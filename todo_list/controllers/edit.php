<?php

require_once './Tareas.php';
use Letalandroid\controllers\Tareas;

$con = new Tareas();

$id = $_POST['id'];
$desc = $_POST['desc'];

$add = $con->edit($id, $desc);

header('Location: /');
