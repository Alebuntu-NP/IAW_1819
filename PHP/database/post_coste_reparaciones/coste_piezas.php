
<?php
  include_once("./db_configuration.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Example Using OpenShift DB Configuration</title>
  </head>
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


$query = "select sum(PrecioReferencia) suma from facturas  f join reparaciones rep
 on f.idreparacion = rep.idreparacion
 join incluyen i 
 on rep.idreparacion = i.idreparacion
 join recambios rem
 on i.idrecambio = rem.idrecambio
 where rep.matricula like '$_GET[codm]'";

      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

          
      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
              <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Matricula</th>
        <th>El coste de la reparacion en piezas</th>
      </tr>
          </thead>
        

      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
              echo "<td>$_GET[cma]</td>";
              echo "<td>$_GET[cmo]</td>";
              echo "<td>$_GET[codm]</td>";
              echo "<td>".$obj->suma."</td>";
             
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
