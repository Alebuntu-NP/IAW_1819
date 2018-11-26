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

<?php if (!isset($_POST["ciudad"])): ?>

<form method="post">
<fieldset>
 <span>Ciudad: <input type="text" name="ciudad" required></span>


<input type="submit" value="Buscar">
</fieldset>
</form>
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
$query = "select * from clientes where direccion like '%".$_POST['ciudad']."'";
if ($result = $connection->query($query)) {

if ($result->num_rows==0){
           echo "ola";
}
else {

echo '<ul>';
while($obj = $result->fetch_object()) {

  echo "<li>";
  echo "Codigo:" .$obj->CodCliente;
  echo "Nombre:" .$obj->Nombre;
  echo "Apellidos:" .$obj->Apellidos;
  echo "DNI:" .$obj->DNI;
  echo "Direccion:" .$obj->Direccion;
  
  echo "Telefono:" .$obj->Telefono;

  echo "</li>";
}

echo "</ul>";
  
}

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
