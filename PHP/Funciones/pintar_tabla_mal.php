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


function pintar_tabla($v) 
{
$filitas="";    
    foreach ($v as $key => $value) {
    
        $celdas="";
        for ($i=0; $i < sizeof($value);$i++) { 
           
           $celdas ="<td>".$value[$i]."</td>"."<td>".$celdas."</td>";
           


        }
       
       $filitas= "<tr>".$celdas."</tr>";
       $filotas=$filotas.$filitas;

    }
    $tablita="<table>".$filotas."</table>";

    return $tablita;

}

$ex = [ "A" => ["a","b","c"], "B" => ["x","y","z"], "C" => ["u","v","w"]];

echo pintar_tabla($ex);

?>


</body>
</html>