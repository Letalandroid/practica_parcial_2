<?php

require_once __DIR__ . '/../controllers/Tareas.php';

use Letalandroid\controllers\Tareas;

$tarea = Tareas::getDataId($_GET['id']);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Views/css/styles.css">
    <title>Edit - <?= $tarea[0]['descripcion'] ?></title>
</head>

<body>
    <form class="m-5" method="post" action="/controllers/edit.php">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">#</span>
            <input hidden type="text" name="id" class="form-control" placeholder="Id" value="<?= $tarea[0]['tarea_id'] ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tarea</span>
            <input type="text" name="desc" class="form-control" placeholder="Descripcion" value="<?= $tarea[0]['descripcion'] ?>">
        </div>
        <input type="submit" class="btn btn-warning" value="Editar">
    </form>
</body>

</html>