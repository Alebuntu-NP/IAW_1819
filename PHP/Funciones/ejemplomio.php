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




/* fucnion dada una fecha evuelva el año */




function fech($dia) {


  $fecha =substr( $dia , 6 , 11);
return $fecha;



};
$ok = "12-12-2012";

echo fech($ok);




?>
</body>
</html>