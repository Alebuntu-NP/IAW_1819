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
    <ol>
<?php

$i = 1;

while ($i <= 100):
    
$potencia =pow(2, $i) ;


   echo  "<li>2<sup>$i</sup> = $potencia</li>";

    $i++;

endwhile;


?>
</ol>
</body>
</html>