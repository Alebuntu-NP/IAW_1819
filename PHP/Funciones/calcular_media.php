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


function calcular_media($v) 

{

$media = 0;
for ($i=0; $i <sizeof($v) ; $i++) { 
    
    $media = $media + $v[$i];

}
$media_buena= $media/sizeof($v);
return $media_buena;



}
$ex= [1,2,3];
echo "<p>La media es:".calcular_media($ex)."</p>";


?>
</body>
</html>