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
//Vectores indexado
ECHO "<br>------------------------------------------------------------<br>";

$v=["a","b","c","d"];
echo $v[2]."<br>";

for ($i=0; $i < sizeof($v) ; $i++) { 
    echo $v[$i]."<br>";
}

$vector=["A"=>"pepe","B"=>"maria" ,"C" => "Juan","D" => "Rosa"];

foreach ($vector as $clave => $valor) {
    echo $valor;
}

//Indexado-indexado
ECHO "<br>------------------------------------------------------------<br>";

$v1=[[1,2,3],[4,5,6],[7,8,9],[10,11]];
//Para mostrar valores indexados dentro de indexados
echo $v1[3][0];
//
for ($k=0; $k < sizeof($v1) ; $k++) {
for ($z=0; $z < sizeof($v1[$k]); $z++) { 
    
    echo $v1[$k][$z];
}
}

//Indexado -Asociativo
ECHO "<br>------------------------------------------------------------<br>";

$v2=[["A"=>1,"B"=>2],["C"=>13,"D"=>2],["E"=>1,"F"=>2]];

echo $v2[1]["D"]."<br>";

for ($H=0; $H < sizeof($v2) ; $H++) { 
    foreach ($v2[$H] as $clave1 => $valor1) {
        echo $valor1;
    }
}

//Asociativo -indexado
ECHO "<br>------------------------------------------------------------<br>";
$v3=["A"=>[1,2,3],"B"=>[4,5,6],"C"=>[7,8,9]];

echo $v3["B"][1];

foreach ($v3 as $clave3 => $valor3) {
    for ($i=0; $i < sizeof($valor3); $i++) { 
    }
}
//Asociativo-asociativo
ECHO "<br>------------------------------------------------------------<br>";

$v4=["A"=>["B"=>1,"C"=>2],"E"=>["F"=>1,"G"=>2],"H"=>["X"=>1,"Y"=>2]];
echo $v4["H"]["Y"];
foreach ($v4 as $clave4 => $valor4) {
    foreach ($valor4 as $clave5 => $valor5) {
        echo $valor5;

    }
}

?>
</body>
</html>