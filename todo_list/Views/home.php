<!-- Lista de contenidos, input, btn añadir, leer, crear, editar, eliminar -->
<?php

require_once __DIR__ . '/../controllers/Tareas.php';

use Letalandroid\controllers\Tareas;

$tareas = Tareas::read();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Views/css/styles.css">
    <title>TODO List</title>
</head>

<body>
    <div class="m-5">
        <form action="/controllers/add.php" method="post" class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Tarea</span>
            <input type="text" name="desc" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <input class="btn btn-dark" type="submit" value="Añadir">
        </form>
        <ul class="list-group">
            <?php foreach ($tareas as $tarea) { ?>
                <li class="list-group-item">
                    <?= $tarea['descripcion'] ?>
                    <div><a href="/Views/edit.php?id=<?= $tarea['tarea_id'] ?>" type="button" class="btn btn-primary">✍️</a>
                        <a href="/controllers/delete.php?id=<?= $tarea['tarea_id'] ?>" type="button" class="btn btn-danger">🗑️</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <button onclick="location.reload()">Cholo aqui puedes recargar</button>
    </div>
</body>

</html>