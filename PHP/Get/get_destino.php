<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php



if ($_GET != null) {
    echo "<ul>";

    echo "<li><h1>Nombre: $_GET[Nombre]</h1></li>";
    echo "<li><h1>Apellidos: $_GET[Apellidos]</h1></li>";
    echo "<li><h1>Edad: $_GET[Edad]</h1></li>";
    echo "<li><h1>Email: $_GET[Email]</h1></li>";
    
    
    echo "</ul>";
} else {
    echo "<h1>No hay datos</h1>";
}






?>
    
</body>
</html>