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
    



<table style="border-collapse:collapse;border:1px solid black">
<tr><td>Op</td><td>R</td></tr>
<?php


$i=0;


while ($i <= 10) {

$num = 2;
$resultado= $i*$num;
echo "<tr><td>$num x $i</td><td>$resultado </td></tr>";




$i++;

}


?>
</table>




</body>
</html>