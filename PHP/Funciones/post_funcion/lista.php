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
$_POST["cantidad"];

function mostrar_lista($v) 
{
$lista = "<ul>"; 
for ($i=0 ; $i < $_POST["cantidad"]; $i++ ) { 
   $num=0;
   $num= $num+$i;
   if ($num%2==) {
    $lista= $lista."<li>".$v."</li>";

   }
   
   
}
$lista=$lista."</ul>";
return $lista;

}
echo mostrar_lista($_POST["cantidad"]);
    ?>
</body>
</html>