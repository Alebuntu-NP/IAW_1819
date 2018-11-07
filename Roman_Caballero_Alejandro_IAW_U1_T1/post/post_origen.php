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
<form action="post_destino.php" method="post">
<fieldset>
<legend>Registro</legend>  
 <span>Nombre: <input type="text" name="nombre" required></span> <br><br>
 <span>Password: <input type="password" name="contraseña" required></span> <br><br>
 <span>Email:  <input type="email" name="email" required></span> <br><br>
 <span>Pais: </span><select name="pais">
    <option value="Japon" selected>Japon</option>
    <option value="España">España</option>
    <option value="Francia">Francia</option>
    <option value="Portugal">Portugal</option>
    <option value="Alemania">Alemania</option>
    <option value="Rusia">Rusia</option>
    <option value="China">China</option>
    <option value="Argentina">Argentina</option>
    <option value="Canada">Canada</option>
    <option value="Mexico">Mexico</option></select> 
 <br><br>
 </fieldset>
 <fieldset>
<legend>Intereses</legend>
<fieldset>

<p><input type="checkbox" name="interes[]" value="Programacion">Programacion
</p>   
<p><input type="checkbox" name="interes[]" value="Redes">Redes
</p>   
<p><input type="checkbox" name="interes[]" value="BD">BD
</p>   
<p><input type="checkbox" name="interes[]" value="Sistemas Operativos">Sistemas Operativos
</p>  
</fieldset>

<input type="submit" value="Registrar">




</form>

</body>
</html>