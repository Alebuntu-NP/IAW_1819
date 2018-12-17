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


function cambiar($haha)
{

$nuevo=[];
foreach ($haha as $key => $value) {
    
    $nuevo[$value]=$key;
    
}
return $nuevo;
}

$vector=["A"=>"B","C"=>"D","E"=>"F","G"=>"H"];




$otrovector=cambiar($vector);
var_dump($otrovector);
?>
    
</body>
</html>