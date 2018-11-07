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

$vectorcompleto = [1,2,3,4,5,6,7,8,9,10];
$vectorp1=[];
$vectorp2=[];
$tamaño =sizeof($vectorcompleto)/2;



if (sizeof($vectorcompleto)%2==0) {
    for ($i=0; $i < sizeof($vectorcompleto); $i++) { 

        if ( $i < $tamaño) {
        
            $vectorp1[]=$vectorcompleto[$i];
        }
         elseif ($tamaño < sizeof($vectorcompleto)) {
            
          $vectorp2[]=$vectorcompleto[$i];
        
        }
        
        
        }

        var_dump($vectorp1);

        var_dump($vectorp2);
    } 
    
    else {
       
echo "ES IMPAR";
}





    ?>
</body>
</html>