<?php

require_once './Tareas.php';
use Letalandroid\controllers\Tareas;

$con = new Tareas();

$desc = $_POST['desc'];

$add = $con->add($desc);

header('Location: /');
