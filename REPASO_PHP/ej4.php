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

<form method="post">
<fieldset>
 <span>KM: <input type="text" name="kilometros" required></span>


<input type="submit" value="BUSCAR">
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
$query = "SELECT distinct*, max(km) as total
FROM vehiculos v JOIN reparaciones r on
v.matricula=r.matricula
group by v.matricula
having max(km) > $_POST[kilometros]";
if ($result = $connection->query($query)) {

if ($result->num_rows==0){
           echo "ola";
}
else {


echo '<table style="border:1px solid black"><thead><tr><th>Matricula</th><th>Marca</th><th>Modelo</th><th>Color</th><th>FechaMatriculacion</th><th>CodCliente</th>';
while($obj = $result->fetch_object()) {

  echo "<tr>";
  echo "<td>".$obj->Matricula."</td>";
  echo "<td>".$obj->Marca."</td>";
  echo "<td>".$obj->Modelo."</td>";
  echo "<td>".$obj->Color."</td>";
  echo "<td>".$obj->FechaMatriculacion."</td>";
  echo "<td>".$obj->CodCliente."</td>";
  echo "</tr>";
}

echo "</table>";
  
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
