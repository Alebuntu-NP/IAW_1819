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

$vector = [
    "Madrid" => [["Nombre" => "Pedro", "Edad" => 32, "Telefono" => 666777888], 
                 ["Nombre" => "Pedro", "Edad" => 40, "Telefono" => 555666777]
                ],
    "Barcelona" => [["Nombre" => "Susana", "Edad" => 34, "Telefono" => 667778889], ["Nombre" => "Jesus", "Edad" => 41, "Telefono" => 88990033]],
    "Zaragoza" => [["Nombre" => "Aitor", "Edad" => 42, "Telefono" => 669998887], ["Nombre" => "Pedro", "Edad" => 40, "Telefono" => 33223344]]];


foreach ($vector as $key => $values) {
    echo "<h1>$key</h1>";
   
  
    echo "<tr>";
 
    
        for ($i=0; $i < sizeof($key); $i++) { 

            foreach ($values[$i] as $key2 => $values2) {
         echo "<td>$key2</td>";
         echo "<td>$values2</td>";
        }        
       
              }
  
    echo "</tr>";
}

?>
</body>
</html>