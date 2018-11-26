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

#Defino el vector
$vectorn = array("8", "12", "22", "50", "7", "13", "14", "15", "100");
#Recorro el vector indexado
$mayor=$vectorn[0];

for ($i = 0; $i < sizeof($vectorn); $i++) {
   
if ($vectorn[$i]>$mayor) {
    $mayor = $vectorn[$i];
}
    
}

echo "<p>El numero mayor es: $mayor</p>";

#Recorro el vector indexado
$menor=$vectorn[0];

for ($i = 0; $i < sizeof($vectorn); $i++) {
   
if ($vectorn[$i]<$menor) {
    $menor = $vectorn[$i];
}
    
}
echo "<p>El numero menor es: $menor</p>";


?>
</body>
</html>