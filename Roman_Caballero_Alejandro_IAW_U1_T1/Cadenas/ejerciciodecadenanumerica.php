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
#Le doy un valor incial a la variable total
$total= 0;
#Defino el vector
$vectorn=array("8","12","22","50","7","13","14","15","100");
#Recorro el vector indexado
for ($i=0;$i<sizeof($vectorn);$i++) {

$total = $vectorn[$i]+$total;

}
$media=$total/sizeof($vectorn);
echo "La media es:".$media;

?>
</body>
</html>