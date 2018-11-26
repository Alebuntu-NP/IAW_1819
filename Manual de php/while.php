<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />  
</head>
<body>

<?php
echo "<table>";
echo "<tr>";
$nombre_de_variable = "pepe";
$i=0;
while($i<7) {
echo "<td>$nombre_de_variable $i/</td>";
$i++;
}
echo "</tr>";
echo "</table>";
?>
</body>
</html>

