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

if ($result = $connection->query($query)) {
   echo "<p>Recambios a añadir</p>";
   
    echo "<span>Recambio: </span>";

    echo "<select name='rem'>";
    while($obj = $result->fetch_object()) {

echo "<option>".$obj->IdRecambio."</option>";



    }
    echo "</select>";
    echo "<br><br>Unidades: <input type='text' name='cantidad'></input>";

    echo "<br><br><input type='submit' value='AÑADIR' name='boton'>";
} 
else { 
    echo "Error en consulta";
}

$result->close();
unset($obj);
unset($connection);
echo "</form>";

?>

<?php else: ?>
<?php 
//CREATING THE CONNECTION
$connection1 = new mysqli("localhost", "tf", "123456", "tf");
$connection1->set_charset("utf8");

//TESTING IF THE CONNECTION WAS RIGHT
if ($connection1->connect_errno) {
    printf("Connection failed: %s\n", $connection1->connect_error);
    exit();
}

//MAKING A SELECT QUERY
/* Consultas de selección que devuelven un conjunto de resultados */
$query1 = "insert into incluyen values ('$_POST[rem]','$_GET[codr]','$_POST[cantidad]')";
if ($result1 = $connection1->query($query1)) {

    header('Location:reparaciones.php');

} else { 
    echo "Error en consulta";
}

$result1->close();
unset($obj1);
unset($connection1);

?>

  
<?php endif?>
</body>
</html>