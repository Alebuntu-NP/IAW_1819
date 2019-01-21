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
                Nombre: <input type="text" name="nom" required>
                Apellidos: <input type="text" name="ap" required>
                Direccion: <input type="text" name="dir" required>
                Telefono: <input type="text" name="tef" required>
                DNI: <input type="text" name="dni" required>
                <input type="submit" value="Insertar">

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



        $query = "insert into clientes (CodCliente,Nombre,Apellidos,DNI,Direccion,Telefono) values ('$_POST[cod]','$_POST[dni]','$_POST[ap]','$_POST[nom]','$_POST[dir]','$_POST[tef]')";


        if ($result = $connection->query($query) ) {

    
                echo "<h1>Cliente insertado correctamente</h1>";
                header('Location:insertarfila.php');
        
        } 
        else { 
                echo "<h1>Error en consulta</h1>";
        }



        unset($connection);

    ?>

        <?php endif?>

</body>
</html>