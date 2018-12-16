
<html>
<head><title>CONSULTA</title></head>
<body>
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
if ($result = $connection->query("select * from vehiculos v join clientes c on v.CodCliente = c.CodCliente;")) {

    printf("<p>The select query returned %d rows.</p>", $result->num_rows);

?>

    <!-- PRINT THE TABLE AND THE HEADER -->
    <table style="border:1px solid black">
    <thead>
      <tr>
        <th>Matricula</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>FechaMatriculacion</th>
        <th>Nombre y Apellidos</th>
       </tr>
    </thead>

<?php

    //FETCHING OBJECTS FROM THE RESULT SET
    //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
    while($obj = $result->fetch_object()) {
        //PRINTING EACH ROW
        echo "<tr>";
        echo "<td>>".$obj->Matricula."</td>";
        echo "<td>".$obj->Marca."</td>";
        echo "<td>".$obj->Modelo."</td>";
        echo "<td>".$obj->Color."</td>";
        echo "<td>".$obj->FechaMatriculacion."</td>";
        echo "<td>".$obj->Nombre." ".$obj->Apellidos."</td>";
        echo "</tr>";
    }

    //Free the result. Avoid High Memory Usages
    $result->close();
    unset($obj);
    unset($connection);

} //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

?>
</body>
</html>