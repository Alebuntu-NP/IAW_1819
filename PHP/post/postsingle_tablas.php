<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing info with POST and HTML FORMS using a single file.</title>
    <link rel="stylesheet" type="text/css" href=" ">
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
	if (!isset($_POST["tablaintroducida"])) : ?>
		<form method="post">
		  <fieldset>
		    <legend>TABLA INTRODUCIR</legend>
		    <span>INTRODUCE TABLA</span><input type="text" name="tablaintroducida" required><br>
		    <span><input type="submit" value="Search"><br>
		  </fieldset>
		</form>


      <?php else: //phpdestino?>

        <?php
            //CREATING THE CONNECTION
      	    $connection = new mysqli("localhost", "root", "Admin2015", "tf");
           //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
           printf("Connection failed: %s\n", $connection->connect_error);
           exit();
          }
      	 //MAKING A SELECT QUERY
            $query="SELECT * FROM $_POST[tablaintroducida]";
         /* Consultas de selección que devuelven un conjunto de resultados */
         if ($result = $connection->query($query)) {
        //Check how many row are returned by the database
         if ($result->num_rows==0) {
		        echo "No clients found";
	       } else {
	          printf("<p>The select query returned %d rows.</p>", $result->num_rows);
	      }
      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
           
          
       <?php
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
         if ($_POST['tablaintroducida']=='clientes') {
            while($obj = $result->fetch_object()) {
                //PRINTING EACH ROW
                echo "<tr>";
                echo "<td>".$obj->CodCliente."</td>";
                echo "<td>".$obj->Nombre."</td>";
                echo "<td>".$obj->Apellidos."</td>";
                echo "<td>".$obj->DNI."</td>";
                echo "<td>".$obj->Direccion."</td>";
                echo "<td>".$obj->Telefono."</td>";
                echo "</tr>";
            }
         }
         elseif ($_POST['tablaintroducida']=='vehiculos') {
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
    
        }    
       
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
      } else { //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
	       echo "Wrong Query";
      }
      ?>

      <?php endif ?>

  </body>
</html>
