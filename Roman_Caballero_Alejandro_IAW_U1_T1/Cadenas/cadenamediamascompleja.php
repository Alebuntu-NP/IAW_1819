<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="cadenamediamascompleja.css" />

</head>

<body>

    <?php

/* Vector asociativo */
$vectora = ["GBD" => [10, 2, 3, 6, 9, 3, 10, 3, 5, 6], "IAW" => [7, 5, 3, 6, 3, 7, 6, 2, 1, 10], "SEG" => [8, 9, 5, 7, 7, 3, 10, 7, 4, 4]];
echo "<table>";
echo "<tr>";
echo "<td></td>";
for ($i = 1; $i <= sizeof($vectora["GBD"]); $i++) {

    echo "<td><h1>" . "A" . "$i" . "</h1></td>";
}
echo "<td><h1>MEDIA</h1></td>";
echo "</tr>";
foreach ($vectora as $key => $value) {
    $suma = 0;
    echo "<tr>";

    echo "<td><h1>$key</h1></td>";

    foreach ($value as $key1 => $value1) {

        $suma = $suma + $value1;
        echo "<td><h1>$value1</h1></td>";
    }
    #for ($i = 0; $i < sizeof($value); $i++) {

    #   $suma = $suma + $value[$i];
    #   echo "<td><h1>"."$value[$i]"."</h1></td>";
    #}
    $resultado = $suma / sizeof($value);
    echo "<td><h1>$resultado</h1></td>";
    echo "</tr>";

}
echo "</table>";

?>
</body>

</html>