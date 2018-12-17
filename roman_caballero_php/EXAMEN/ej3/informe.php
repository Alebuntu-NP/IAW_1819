<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GETDESTINO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php


if ($_GET != null) {


   
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
    $query="select  rem.Descripcion,i.IdRecambio, sum(i.Unidades) as Total from incluyen i join recambios rem on i.IdRecambio=rem.IdRecambio where i.IdRecambio = '$_GET[cod]'";
    if ($result = $connection->query($query)) {
    
        
   
   
        ?>




        <!-- PRINT THE TABLE AND THE HEADER -->
        
    
    <?php
    echo "<table>";
        //FETCHING OBJECTS FROM THE RESULT SET
        //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
        while($obj = $result->fetch_object()) {
            if ($obj->Total==0) {
                echo "No se ha utilizado el recambio";
            } else {
                printf("<p>The select query returned %d rows.</p>", $result->num_rows);
                echo "<th>IdRecambio</th>";
                echo "<th>Descripcion</th>";
                echo "<th>Total Unidades</th>";
                echo "<tr>";
                echo "<td>".$obj->IdRecambio."</td>";
                echo "<td>".$obj->Descripcion."</td>";
                echo "<td>".$obj->Total."</td>";
                echo "</tr>";
                
            }
            
            //PRINTING EACH ROW
            
        }
    echo "</table>";
        //Free the result. Avoid High Memory Usages
        $result->close();
        unset($obj);
        unset($connection);


    } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    
    ?>

<?php

} else {
    echo "<h1>Error en la consulta</h1>";
}

?>
    
</body>
</html>