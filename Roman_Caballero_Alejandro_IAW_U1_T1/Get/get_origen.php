<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="get.css" />
</head>
<body>
<?php

echo "<table>";
echo "<tr><td>Nombre</td><td>Apellidos</td><td>Edad</td><td>Email</td></tr>";
echo "<tr><td>Lucas</td><td>Fernandez</td><td>22</td><td><a href=get_destino.php?Nombre=Lucas&Apellidos=Fernandez&Edad=22&Email=lucas@hotmail.com>lucas@hotmail.com</a></td></tr>";
echo "<tr><td>Pedro</td><td>Nuevo</td><td>16</td><td><a href=get_destino.php?Nombre=Pedro&Apellidos=Nuevo&Edad=16&Email=pedro@hotmail.com>pedro@hotmail.com</a></td></tr>";
echo "<tr><td>Mariano</td><td>Estepeño</td><td>35</td><td><a href=get_destino.php?Nombre=Mariano&Apellidos=Estepeño&Edad=35&Email=mariano@hotmail.com>mariano@hotmail.com</a></td></tr>";
echo "<tr><td>Antonieta</td><td>Gutierrez</td><td>24</td><td><a href=get_destino.php?Nombre=Antonieta&Apellidos=Gutierrez&Edad=24&Email=antonieta@hotmail.com>antonieta@hotmail.es</a></td></tr>";
echo "<tr><td>Alberto</td><td>Garzon</td><td>21</td><td><a href=get_destino.php?Nombre=Alberto&Apellidos=Garzon&Edad=21&Email=alberto@hotmail.com>alberto@hotmail.com</a></td></tr>";
echo "</table>"
?>
</body>
</html>
