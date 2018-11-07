<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Este es mi ajedrez</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="ajedrez.css" />
</head>

<body>
    <?php
/*
$i = 1;
echo "<table>";

while ($i <= 800) {

echo "<tr>";

$a = 1;
while ($a <= 800):
echo "<td></td>";
$a++;
endwhile;

$i++;
echo   "</tr>";
}

echo "</table>";

 */

$tam=8;

echo "<table>";
for ($i=0; $i < $tam; $i++) {

    echo "<tr>";

    for ($j=0; $j < $tam; $j++) {

        if ((($i%2 == 0) && ($j%2 == 0)) ||
            (($i%2 == 1) && ($j%2 == 1))) {

            echo "<td class='negra'></td>";

        } else {
            echo "<td class='roja'></td>";

#}
            #        echo "<td>".($i*8+$j)."</td>";
            #    }
        }
}
       
echo "</tr>";
    }
    echo "</table>";

?>

</body>

</html>
