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

<?php if (!isset($_POST["kilometros"])): ?>

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
$query = "select * from incluyen i join recambios rem on rem.IdRecambio = i.IdRecambio where  i.IdReparacion= $_GET[codm] ";
if ($result = $connection->query($query)) {

if ($result->num_rows==0){
           echo "No devuelve filas";
}
else {

echo "<form type='post'>";

while($obj = $result->fetch_object()) {


    echo "$obj->IdRecambio.<input type='text' name='cantidad'></input><br><br>";


}
echo "<br><input type='submit' value='Añadir'>";
echo "</form>";

}
} else { 
    echo "Error en consulta";
}

$result->close();
unset($obj);
unset($connection);

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
$query1 = "update incluyen set Unidades = $_POST[cantidad] + 1 like idreparacion = $_GET[codm]";
if ($result1 = $connection1->query($query)) {

    header('Location:informe.php');

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
