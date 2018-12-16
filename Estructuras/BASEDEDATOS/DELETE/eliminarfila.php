<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <?php if (!isset($_POST["cod"])): ?>

            <form method="post">
                CodClient: <input type="text" name="cod" required>
                <input type="submit" value="Borrar cliente">

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



        $query = "delete from clientes
        where CodCliente='$_POST[cod]'";


        if ($result = $connection->query($query) ) {

    
                echo "<h1>Cliente borrado correctamente</h1>";
        
        
        } 
        else { 
                echo "<h1>Error en consulta</h1>";
                echo "<h1>Cliente no existe</h1>";

        }



        unset($connection);

    ?>

        <?php endif?>

</body>
</html>