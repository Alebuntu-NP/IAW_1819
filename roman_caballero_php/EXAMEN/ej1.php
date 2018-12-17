<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php

function convertir($divisa,$cantidad) {

    $vector=['Dolares $'=>1.1185,'Runas'=>2,'Rupias'=>3,'Esmeraldas'=>1.5,'Centavos'=>10];
    $num=0;

foreach ($vector as $tipo => $valor) {
    
if ($divisa==$tipo) {

    $num=$cantidad*$valor;

}

}
return $num;


}

?>
  
<?php if (!isset($_POST["cant"])) : ?>

<form method="post">
<table>

<h1>CONVERSOR DE MONEDA</h1>

<tr><td>Cantidad:</td><td>Moneda Destino:</td></tr>

<tr><td><input type="text" name="cant" required></td>

<td><select name="tip">
<option value="Dolares $">Dolares $</option>
<option value="Runas">Runas</option>
<option value="Rupias">Rupias</option>
<option value="Esmeraldas">Esmeraldas</option>
<option value="Centavos">Centavos</option>
</select></td>
</tr>

</table>      
<br>
<input type="submit" value="Registrar">
</form>

<?php else: ?>

<?php

 echo "<h1>".$_POST["cant"]."€"." "."= ".convertir($_POST["tip"],$_POST["cant"])." ".$_POST["tip"]."</h1>";

 ?>

<?php endif ?>
</body>
</html>