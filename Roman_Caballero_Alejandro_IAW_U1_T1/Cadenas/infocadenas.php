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
#Elementos de cadena no asocitivo
$vector1=array("UNO","DOS","TRES");
var_dump($vector1);
#Elemento de cadena asociativos
$vector2=array("Nombre" => "Alex","Curso" => "Segundo");
var_dump($vector2);

#Añadir un elemento a un vector  no asociativo
$vector1[]="CUATRO";
var_dump($vector1);

#Añadir un elemento a un vector asociativo

$vector2["Provincia"]="Sevilla";
var_dump($vector2);


# Recorrido de un vector no asociativo

for ($i=0;$i<sizeof($vector1);$i++) {

}
#$p =$vector2(Nombre);
#foreach ($vector2 as $p=>$Alex) {
#      echo "Elemento $p----->".$vector2."<br>"; 
#}
#?>

</body>
</html>