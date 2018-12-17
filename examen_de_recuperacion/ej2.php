<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
table {
    border-collapse:collapse;

}

td {
    width: 150px;
    height: 30px;
    border:1px solid black;

}

.cerito {

    color:white;
    background-color: red;
}
    </style>
</head>
<body>

<?php

$vector=[

    "V1"=>[3,4,5,6,7,5],  "V2"=>[3,4,0,6,7,0],  "V3"=>[3,4,5,0,7,0],  "V4"=>[0,4,5,6,7,5],  "V5"=>[3,4,5,6,7,5],  "V6"=>[3,0,5,6,0,5]

];
echo "<table>";

foreach ($vector as $key => $value) {
    echo "<tr>";
for ($i=0; $i < sizeof($value) ; $i++) { 
    
if ($value[$i] == 0) {
    echo "<td class='cerito'>$value[$i]</td>";
} else {
    echo "<td  class='nocerito'>$value[$i]</td>";
}




}
echo "</tr>";



}
echo "</table>";


?>    

</body>
</html>