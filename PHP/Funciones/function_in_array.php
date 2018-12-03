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

function esta($v,$e) 
{
    
for ($i=0; $i < sizeof($v); $i++) { 

    if ($e == $v[$i]) {
     return true;
        
    }
 
}
return false;



}
$ex=["pepe","lucas","maria"];
$nombre= "pepe";

if (esta($ex,$nombre)) {
    echo "El elemento $nombre esta"."<br>";
}
if (!esta($ex,$nombre)) {
echo "El elemento $nombre no esta";

}
?>

</body>
</html>