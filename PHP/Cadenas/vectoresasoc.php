<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid black;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <?php 
    $vectorh = ["Nombre","Edad","Direccion"];
    $vector1 = ["Nombre" => "Juan","Edad" => 25,"Direccion" => "San Jacinto 79"];
    $vector2 = ["Nombre" => "Pedro","Edad" => 85,"Direccion" => "Pocillo de Gilvan 19"];
    $vector3 = ["Nombre" => "Nicolas","Edad" => 2,"Direccion" => "Lorenzo 79"];
    $vectord = [$vector1,$vector2,$vector3];
#Act 1 Aqui coje la clave
echo "<table>";
echo "<tr>";

foreach ($vector1 as $i) {
    echo "<td>" . $i . "</td>";
}

echo "</tr>";

echo "</table>";
####
echo "<br>";

#Act 2 Aqui cojemos tanto la clave tanto el valor
echo "<table>";
echo "<tr>";

foreach ($vector1 as $k => $value) {
    echo "<td>" . $k . "</td>";
}

echo "</tr>";
echo "<tr>";

foreach ($vector1 as $i) {
    echo "<td>" . $i . "</td>";
}

echo "</tr>";

echo "</table>";
#####

echo "<br>";
#Act 3 Aqui coje tanto la clave como el valor

echo "<table>";

foreach ($vector1 as $k => $value) {
    echo "<tr>";
    echo "<td>" . $k . "</td>";
    echo "<td>" . $value . "</td>";
    echo "</tr>";
}

echo "</table>";

echo "</table>";
#####

echo "<br>";
#Act 4 Aqui VECTOR indexado

echo "<table>";

echo "<tr>";




echo "<td>".$vectorh[0]."</td>";
echo "<td>".$vectorh[1]."</td>";
echo "<td>".$vectorh[2]."</td>";


    
    echo "</tr>";
for ($i=0;$i<sizeof($vectord);$i++) {
  


    echo "<tr>";
    
    foreach ($vectord[$i] as $a) {
        echo "<td>" . $a . "</td>";
    }
    
    echo "</tr>";


  }

echo "</table>";


?>
</body>

</html>