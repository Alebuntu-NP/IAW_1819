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


$tam=9;

echo "<table>";
for ($i=0; $i < $tam; $i++) {

    echo "<tr>";

    for ($j=0; $j < $tam; $j++) {


                 echo "<td>".($i*$tam+$j)."</td>";
              }
        

       
echo "</tr>";
    }
    echo "</table>";

?>

</body>

</html>
