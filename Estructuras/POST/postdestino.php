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

    if ($_POST == NULL) {

        echo "No hay datos";
    } else {

echo "<p>$_POST[nombre]  Correctamente Registrado</p>";

 }
?>
   
    


</body>
</html>