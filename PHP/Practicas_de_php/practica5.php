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

$num1 = 5;
$num2 = 8;

if ($num1 > $num2) {
    echo "El numero  $num1  es mayor que el numero  $num2";
} 

elseif ($num1 < $num2) { 
    echo "El numero  $num1  es menor que el numero  $num2";
}

elseif ($num1 == $num2) {
    echo "El numero  $num1  es igual que el numero  $num2";
}


    ?>
</body>
</html>