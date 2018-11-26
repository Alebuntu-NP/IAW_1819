/Dos listas , una con los numeros pares de ese vector y
/otra con el numeros impares de ese vector

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
    <?php

$vect1 = array("7", "13", "15", "22", "16", "14", "30", "8", "10");
var_dump($vect1);
echo "<ul>Numeros Pares";
for ($i = 0; $i < sizeof($vect1); $i++) {

    if ($vect1[$i] % 2 == 0) {
        echo "<li>$vect1[$i]</li>";

    }

}
echo "</ul>";
echo "<ul>Numeros Impares";
for ($k = 0; $k < sizeof($vect1); $k++) {

    if ($vect1[$k] % 2 != 0) {
        echo "<li>$vect1[$k]</li>";
    }

}
echo "</ul>";
#hacerlo en un solo for, hacer concadenacion

$pares = "";
$impares = "";
for ($i = 0; $i < sizeof($vect1); $i++) {

    if ($vect1[$i] % 2 != 0) {
        $impares = $impares . "<li>" . $vect1[$i] . "</li>";
    } else {
        $pares = $pares . "<li>".$vect1[$i] . "</li>";
    }

}
echo "<h3>Numeros impares</h3>";
echo "<ul>";
echo $impares;
echo "</ul>";

echo "<h3>Numeros pares</h3>";
echo "<ul>";
echo $pares;
echo "</ul>";

?>
</body>
</html>