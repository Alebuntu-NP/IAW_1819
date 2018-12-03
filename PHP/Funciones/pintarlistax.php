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

function pintarlista($v) 
{
    $salida="<ul>";

    for ($i = 0; $i < sizeof($v); $i++) { 
    $salida= $salida."<li>".$v[$i]."</li>"; 
    }

    $salida=$salida."</ul>";
    return $salida;

}

$ex= [2,3,4,5,6,7,8];

echo pintarlista($ex);

?>
</body>
</html>