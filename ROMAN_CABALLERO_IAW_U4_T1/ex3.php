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
$v=["Los Simpsons" => ["padre" => "Homer","madre" => "Marge", "hijos" => "Bart, Lisa y Maggie"],

"Los Griffin" => ["padre" => "Peter" , "madre" => "Lois", "hijos" => "Chris, Meg y Stewie"]];
echo "<table style='border:1px solid black;'>";
echo "<tr><td></td>";
foreach ($v["Los Simpsons"] as $a=> $b) {
    echo "<td>$a</td>";

}
echo "</tr>";
foreach ($v as $key => $value1) {
echo "<tr><td>$key </td>";
foreach ($value1 as $key2 => $value2) {

echo "<td>$value2 </td>";

}



echo "<tr>";
}
echo "</table>";
?>


</body>
</html>