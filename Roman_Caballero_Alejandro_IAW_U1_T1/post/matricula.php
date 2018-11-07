<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="matricula.css" />
</head>
<body>


<?php if (!isset($_POST["start"])) : ?>
  <form method="post">
    <fieldset>
      <legend>PRIMERO</legend>
            <input type="checkbox" name="asignaturas1[]" value="LM">LM<br>
            <input type="checkbox" name="asignaturas1[]" value="GBD">GBD<br>
            <input type="checkbox" name="asignaturas1[]" value="FOL">FOL<br>
            <input type="checkbox" name="asignaturas1[]" value="PAR">PAR<br>
            <input type="checkbox" name="asignaturas1[]" value="FH">FH<br>
            <input type="checkbox" name="asignaturas1[]" value="ISO">ISO<br>
    </fieldset>
    <fieldset>
      <legend>SEGUNDO</legend>
      <input type="checkbox" name="asignaturas2[]" value="SEG">SEG<br>
      <input type="checkbox" name="asignaturas2[]" value="ASO">ASO<br>
      <input type="checkbox" name="asignaturas2[]" value="AGBD">AGBD<br>
      <input type="checkbox" name="asignaturas2[]" value="EMP">EMP<br>
      <input type="checkbox" name="asignaturas2[]" value="IAW">IAW<br>
      <input type="checkbox" name="asignaturas2[]" value="SRI">SRI<br>

    </fieldset>
    <input type="submit" name="start" value="MATRICULAR" id="ola">

 </form>
 


<?php else: ?>

  <?php



  if (isset($_POST["asignaturas1"])) {
  echo "<h1>PRIMERO</h1>";

  echo "<ul>";
for ($i=0; $i < sizeof($_POST["asignaturas1"]) ; $i++) { 
    echo "<li>" . $_POST["asignaturas1"][$i] . "</li>";
    var_dump($_POST["asignaturas1"]);

}

echo "</ul>";
} else {

    echo "<h1>No tiene ninguna de primero</h1>";

}
if (isset($_POST["asignaturas2"])) {

echo "<h1>SEGUNDO</h1>";
echo "<ul>";

for ($k=0; $k < sizeof($_POST["asignaturas2"]) ; $k++) { 
    echo "<li>" . $_POST["asignaturas2"][$k] . "</li>";
}
echo "</ul>";
} else {

    echo "<h1>No tiene ninguna de segundo</h1>";
 }


  ?>
<?php endif ?>


</body>
</html>