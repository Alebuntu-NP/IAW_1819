<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informe</title>
  </head>
  <body>
    <?php


          //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "tf", "123456", "tf");
          $connection->set_charset("uft8");
    
          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
    
          //MAKING A SELECT QUERY
          /* Consultas de selección que devuelven un conjunto de resultados */
            $query="select *,count(i.idrecambio) as total from recambios rem join incluyen i
            on rem.idrecambio = i.idrecambio
            where rem.idrecambio like '$_GET[id]'";
          if ($result = $connection->query($query)) {
    
              printf("<p>The select query returned %d rows.</p>", $result->num_rows);
    
          ?>
    
              <!-- PRINT THE TABLE AND THE HEADER -->
              <table style="border:1px solid black">
              <thead>
                <tr>
                  <th>IdRecambio</th>
                  <th>Descripcion</th>
                  <th>UNIDADES TOTALES</th>
             
              </thead>
    
          <?php
    
              //FETCHING OBJECTS FROM THE RESULT SET
              //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
             
             if ($_GET=NULL) {

                echo "No se ha utilizado el recambio";

             } else {

                while($obj = $result->fetch_object()) {
                    //PRINTING EACH ROW
                    echo "<tr>";
                      echo "<td>".$obj->IdRecambio."</td>";
                      echo "<td>".$obj->Descripcion."</td>";
                      echo "<td>".$obj->total."</td>";
                    echo "</tr>";
                }

             }
             
     
    
              //Free the result. Avoid High Memory Usages
              $result->close();
              unset($obj);
              unset($connection);
    
          } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    ?>


  </body>
</html>
