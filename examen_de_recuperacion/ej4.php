<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SINGLEPOST</title>
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <!-- PHP STRUCTURE FOR CONDITIONAL HTML -->
      <!-- FIRST TIME. NO DATA IN THE POST (checking a required form field) -->
      <!-- So we must show the form -->

      <?php
      /*MUESTRA LA TABLA QUE METAS POR INPUT*/
	if (!isset($_POST["maximo"])) : ?>
<h1>Stock</h1>
<form method="post">
MIN: <input type="text" name="maximo"><BR><BR>
MAX: <input type="text" name="minimo"><BR><BR>

<input type="submit" value="BUSCAR">
</form>

      <?php else: //phpdestino?>
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
$query="select i.IdRecambio ,rem.Descripcion,rem.stock,count(i.idreparacion) reparaciones_usadas from recambios rem join incluyen i on rem.idrecambio = i.idrecambio 
where rem.stock>=$_POST[maximo] and $_POST[minimo]>=rem.stock group by i.idrecambio";

if ($result = $connection->query($query)) {

    printf("<p>The select query returned %d rows.</p>", $result->num_rows);

?>

    <!-- PRINT THE TABLE AND THE HEADER -->
    <table style="border:1px solid black">
    <thead>
      <tr>
        <th>IDRECAMBIO</th>
        <th>DESCRIPCION</th>
        <th>STOCK</th>
        <th>REPARACIONES EN LAS QUE SE HA USADO</th>
       </tr>
    </thead>

<?php

    //FETCHING OBJECTS FROM THE RESULT SET
    //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
    while($obj = $result->fetch_object()) {
        //PRINTING EACH ROW
        echo "<tr>";
        echo "<td>".$obj->IdRecambio."</td>";
        echo "<td>".$obj->Descripcion."</td>";
        echo "<td>".$obj->stock."</td>";
        echo "<td>".$obj->reparaciones_usadas."</td>";
        echo "</tr>";
    }

    //Free the result. Avoid High Memory Usages
    $result->close();
    unset($obj);
    unset($connection);

} //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

?>
 

      <?php endif ?>
     
  </body>
</html>
