<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>

<?php

/* Vector asociativo */
$vectora = ["GBD" => [10,2,3,6,9,3,10,3,5,6], "IAW" => [7,5,3,6,3,7,6,2,1,10] , "SEG" =>  [8,9,5,7,7,3,10,7,4,4]];
echo "<table style='border-collapse:collapse;border:1px solid black'    >";
foreach ($vectora as $key => $value) {
    $suma = 0;

    foreach ($value as $key1 => $value1) {
    
       $suma = $suma + $value1;
    
    }
    $resultado = $suma / sizeof($value);
echo "<tr style='border-collapse:collapse;border:1px solid black'>";
    echo "<td style='border-collapse:collapse;border:1px solid black'><h1>$key</h1></td>";

    echo "<td><h1>$resultado</h1><td>";
    echo "</tr>";  
    
    
}
echo "</table>";

?>
</body>
</html>