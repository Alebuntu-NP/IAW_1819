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

<?php if (!isset($_POST["codcl"])): ?>
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
$query = "select * from clientes where codcliente ='".$_GET['codc']."'";

if ($result = $connection->query($query)) {
    while($obj = $result->fetch_object()) {


echo "<form method='post'>";
echo "<fieldset>";
echo "<span>CodCliente: <input type='text' name='codcl'  value='$obj->CodCliente' required></span>";
echo "<span>DNI: <input type='text' name='dni' value='$obj->DNI' required></span>";
echo "<span>Nombre: <input type='text' name='nom' value='$obj->Nombre' required></span>";
echo "<span>Apellidos: <input type='text' name='ap' value='$obj->Apellidos' required></span>";
echo "<span>Direccion: <input type='text' name='dir' value='$obj->Direccion' required></span>";
echo "<span>Telefono: <input type='text' name='tef' value='$obj->Telefono'required></span>";
echo "<input type='submit' value='Actualizar'>";
echo "</fieldset>";
echo "</form>";

    }

} 
else { 
    echo "Error en consulta";
}

$result->close();
unset($obj);
unset($connection);

?>
<?php else: ?>

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
$query = "update clientes
set CodCliente = '".$_POST['codcl']."',
	DNI = '".$_POST['dni']."',
    Nombre = '".$_POST['nom']."',
    Apellidos = '".$_POST['ap']."',
    Direccion = '".$_POST['dir']."',
    Telefono = '".$_POST['tef']."' where CodCliente = '".$_POST['codcl']."'";
if ($result = $connection->query($query)) {

    header('Location:clientes.php');

} else { 
    echo "Error en consulta";
}

$result->close();
unset($obj);
unset($connection);

?>

<?php endif?>

</body>
</html>

