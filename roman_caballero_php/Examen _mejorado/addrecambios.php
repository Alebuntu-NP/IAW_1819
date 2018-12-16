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

<?php if (!isset($_POST["boton"])): ?>
<?php
echo "<form method='post'>";

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
$num=0;
if ($result = $connection->query($query)) {
    while($obj = $result->fetch_object()) {


$num=$num+1;
echo "<p>$obj->IdRecambio: <input type='text' name='$num'  value='' ></p>";

echo "</fieldset>";

    }
    echo "<input type='submit' value='Actualizar' name='boton'>";
} 
else { 
    echo "Error en consulta";
}

$result->close();
unset($obj);
unset($connection);
echo "</form>";
echo var_dump($_POST);

?>

<?php else: ?>
<?php
echo var_dump($_POST);
?>
<?php endif?>
</body>
</html>