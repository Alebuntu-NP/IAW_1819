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
echo "<table>";
echo "<thead><th>Pares</th><th>Impares</th><thead>";
for ($num=0;$num<100;$num++) 
{

if ($num%2==0)
{
echo "<tr><td>"."El número $num es par"."</td>";
}
else
{
echo "<td>"."El número $num es impar"."</td></tr>";
}

}


echo "</table>";
?>


</body>
</html>

