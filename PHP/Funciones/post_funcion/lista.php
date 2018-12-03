<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
function mostrar_lista($v) 
{
$lista = "<ul>"; 


for ($num=0 ; $num < ($_POST["cantidad"]*2); $num++ ) { 
    
    if ($num%2==0)
    {

    $lista= $lista."<li>".$num."</li>";

    }


   
}
$lista=$lista."</ul>";
return $lista;

}

if ($_POST == NULL) {
    echo "<h1>No hay datos insertados en el POST</h1>";
} else {

echo mostrar_lista($_POST["cantidad"]);
}

    ?>
</body>
</html>