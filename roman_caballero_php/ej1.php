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

<?php if (!isset($_POST["cantidad"])): ?>

<form method="post">
<fieldset>
<legend>Conversor de moneda</legend>
 <span>Cantidad €: <input type="text" name="cantidad" required></span> 
 <span>Moneda Destino: </span>
 <select name="cambio">
    <option value="Dolares" selected>Dólares $</option>
    <option value="Libras">Libras</option>
    <option value="Francos">Francos</option>
    <option value="Yen">Yen</option>
    <option value="Runas">Runas</option>
</select>

 </fieldset>



<input type="submit" value="Convertir">




</form>
<?php else: ?>
<?php


function convertir($cant,$nom)
{
$nuevacant=0;
    if ($nom== "Dolares") {
    $nuevacant=$cant * 1.1185;
    
    }
    elseif ($nom == "Libras") {
    $nuevacant=$cant * 3;

    }
    elseif ($nom == "Francos") {
        $nuevacant=$cant * 3;
    
        }
        elseif ($nom == "Yen") {
            $nuevacant=$cant * 3;
        
            }
            elseif ($nom == "Runas") {
                $nuevacant=$cant * 3;
            
                }
return "$cant = $nuevacant $nom";

}


echo convertir($_POST['cantidad'],$_POST['cambio']);

?>

<?php endif?>
</body>
</html>