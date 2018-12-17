
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
if ($result = $connection->query("select * from recambios;")) {

    printf("<p>The select query returned %d rows.</p>", $result->num_rows);

?>

    <!-- PRINT THE TABLE AND THE HEADER -->
    <table style="border:1px solid black">
    <thead>
      <tr>
        <th>IdRecambio</th>
        <th>Descripcion</th>
        <th>UnidadBase</th>
        <th>Stock</th>
        <th>PrecioReferencia</th>
       </tr>
    </thead>

<?php

    //FETCHING OBJECTS FROM THE RESULT SET
    //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
    while($obj = $result->fetch_object()) {
        //PRINTING EACH ROW
        echo "<tr>";
        echo "<td>".$obj->IdRecambio."</td>";
        echo "<td><a href=informe.php?cod=$obj->IdRecambio>".$obj->Descripcion."</a></td>";
        echo "<td>".$obj->UnidadBase."</td>";
        echo "<td>".$obj->Stock."</td>";
        echo "<td>".$obj->PrecioReferencia."</td>";
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