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

<?php if (!isset($_POST["ciudad"])): ?>

<form method="post">
<fieldset>
<legend></legend>
 <span>Ciudad: <input type="text" name="ciudad" required></span> <br><br>
 
 </fieldset>


<input type="submit" value="Buscar">




</form>
<?php else: ?>
<?php
echo "<p>$_POST[ciudad]  Correctamente Registrado</p>";
echo "<ul>";
for ($i = 0; $i < sizeof($_POST["ciudad"]); $i++) {
    echo "<li>" . $_POST["ciudad"][$i] . "</li>";
}
echo "</ul>";
?>

<?php endif?>
</body>
</html>