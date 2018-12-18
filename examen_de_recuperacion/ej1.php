<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    

<?php

$elementos = ["nombre"=> "text", "fecha_de_nacimiento"=> "date", "edad" => "number"];
$texto="Enviar";
function crear_formulario($vector,$cadena){
echo "<form>";
foreach ($vector as $key => $value) {
 
    echo "$key:"." "."<input type=$value></input><br><br>";


}
echo "<input type='submit' value=$cadena></input>";
echo "</form>";
}

crear_formulario($elementos,$texto);

?>
</body>
</html>