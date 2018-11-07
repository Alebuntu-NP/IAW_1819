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
$vectorentero=[1,2,3,4,5,6,7,8,9,10];
$suma = 0;
echo "<h1>Lista de posiciones pares</h1>";
echo "<ul>";

for ($i=0; $i < sizeof($vectorentero) ; $i++) { 
  

    if ($i%2!=0) {
        $suma=$i + $suma;
    } else {
    echo  "<li><h1>$vectorentero[$i]</h1></li>";
    }
    
}
echo "</ul>";
echo "<h1>Media de posiciones impares: $suma</h1>";

?>
</body>
</html>