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
   $vector= ["A"=>"B","C"=>"D","E"=>"F","G"=>"H"];
   var_dump($vector);
function cambiar($v){

$key="";
$valor="";
    foreach ($v as $k => $value) {


    $key=$k;
    $valor=$value;

    $k = $valor;
    $value=$key;
    }
    
     
}
$vector=cambiar($vector);
   var_dump($vector);

?>


</body>

</html>