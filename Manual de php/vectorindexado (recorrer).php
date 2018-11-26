<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />  
</head>
<body>
<?php

$vin = ["uno","dos","tres","cuatro"];
for ($i=0;$i<sizeof($vin);$i++){
echo "<b> ".$vin[$i]." </b>";
}


?>
</body>
</html>

