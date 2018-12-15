<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php if (!isset($_POST["cantidad"])): ?>

<form method="post">
<fieldset>
<legend>Conversor de moneda</legend>
 <span>Cantidad €: <input type="text" name="cantidad" required></span> 
 <span>Moneda Destino: </span>
 <select name="cambio">
    <option value="Dolares" >Dólares $</option>
    <option value="Libras" >Libras</option>
    <option value="Francos" >Francos</option>
    <option value="Yen" >Yen</option>
    <option value="Runas" >Runas</option>
</select>

 </fieldset>



<input type="submit" value="Convertir">




</form>
<?php else: ?>
<?php


function convertir($tipo,$cantidad)
{
    

    $v=['Dolares'=>1.6,'Libras'=>1.7,'Francos'=>2.45,'Yen'=>7.9,'Runas'=>4.5];
   $resultado=0;
   $resultado=$v[$tipo]*$cantidad;
     


return $resultado;

}




echo "<h1>".$_POST['cantidad']."€"."=".convertir($_POST['cambio'],$_POST['cantidad'])." ".$_POST['cambio']."</h1>";

?>

<?php endif?>


</body>
</html>