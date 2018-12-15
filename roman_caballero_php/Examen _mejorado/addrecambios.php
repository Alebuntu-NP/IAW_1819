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

<?php if (!isset($_POST["nombre"])): ?>
<?php

//CREATING THE CONNECTION
$connection = new mysqli("localhost", "tf", "123456", "tf");
$connection->set_charset("utf8");
//TESTING IF THE CONNECTION WAS RIGHT
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}
//MAKING A SELECT QUERY
/* Consultas de selección que devuelven un conjunto de resultados */
$query = "select * from recambios";

if ($result = $connection->query($query)) {
    while($obj = $result->fetch_object()) {


echo "<form method='post'>";

echo "<p>$obj->IdRecambio: <input type='text' name='codcl'  value='' required></p>";

echo "</fieldset>";
echo "</form>";

    }
    echo "<input type='submit' value='Actualizar'>";
} 
else { 
    echo "Error en consulta";
}

$result->close();
unset($obj);
unset($connection);

?>

<?php else: ?>



<?php endif?>
</body>
</html>