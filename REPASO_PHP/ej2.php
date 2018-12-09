<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

$v = ["-","X","-","-","X","-","X","-","-","X"];

function numveces($vector,$contiene) 
    {
        $n=0;
        for ($i=0; $i < sizeof($vector); $i++) { 

            if ($contiene == $vector[$i]) {
             $n=$n+1;
        
            }
        }
    return $n;

    }


    echo "El elemento X se repite ".numveces($v,"X")." veces"."<br>";
    echo "El elemento - se repite ".numveces($v,"-")." veces"."<br>";



    ?>
</body>
</html>