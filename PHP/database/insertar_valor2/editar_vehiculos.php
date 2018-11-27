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

<?php if (!isset($_POST["mat"])): ?>
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
$query = "select * from vehiculos v join clientes c on v.CodCliente = c.CodCliente where v.matricula ='".$_GET['matri']."'";
echo "$query";
if ($result = $connection->query($query)) {
    while($obj = $result->fetch_object()) {


echo "<form method='post'>";
echo "<legend>REGISTRO</legend>";
echo "<fieldset>";
echo "<p>Matricula <input type='text' name='mat'  value='$obj->Matricula' required></p>";
echo "<p>Marca: <input type='text' name='mar' value='$obj->Marca' required></p>";
echo "<p>Modelo: <input type='text' name='mod' value='$obj->Modelo' required></p>";
echo "<p>Color: <input type='text' name='col' value='$obj->Color' required></p>";
echo "<p>FechaMatriculacion: <input type='text' name='fech' value='$obj->FechaMatriculacion' required></p>";
echo "Clientes: <select name='client'>";



$connection2 = new mysqli("localhost", "tf", "123456", "tf");
$connection2 ->set_charset("utf8");

if ($connection2->connect_errno) {

    printf("Connection failed: %s\n", $connection2 ->connect_error);
    exit();

}
$query2 = "select * from  clientes";  

if ($result2 = $connection2->query($query2)) {

    while($obj2 = $result2->fetch_object()) {
if ($obj->CodCliente==$obj2->CodCliente) {    
    echo "<option value='$obj2->CodCliente' selected>".$obj2->Nombre." ".$obj2->Apellidos."</option>";

}
    echo "<option value='$obj2->CodCliente'>".$obj2->Nombre." ".$obj2->Apellidos."</option>";

    }

 } else { 

        echo "Error en consulta";
    }

echo "</select>";
echo "<p><input type='submit' value='Editar'></p>";
echo "</fieldset>";
echo "</form>";

    }

} 
else { 
    echo "Error en consulta";
}

$result->close();
$result2->close();
unset($obj);
unset($obj2);
unset($connection);
unset($connection2);

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
$query = "update vehiculos
set Matricula = '".$_POST['mat']."',
	Marca = '".$_POST['mar']."',
    Modelo = '".$_POST['mod']."',
    Color = '".$_POST['col']."',
    FechaMatriculacion = '".$_POST['fech']."',
    CodCliente = '".$_POST['client']."' where Matricula = '".$_GET['matri']."'";
if ($result = $connection->query($query)) {

    header('Location:vehiculos.php');

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
