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
        <form action="#" class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Tarea</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <input class="btn btn-dark" type="submit" value="Submit">
        </form>
    </div>
    <script>
        const tareas = <?= json_encode($tareas); ?>;
        console.log(tareas);
    </script>
</body>

</html>