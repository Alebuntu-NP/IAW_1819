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
        function es_primo($numero) {
            $h="";
            $numerito =0;
            for ($i=0; $i < ($numero*2); $i++) { 
                $numerito=$numerito+1;
                if ($numerito%1==0 && $numerito%$numerito==0 && $numerito%2==1) {
                    $h=$h."<br>"."$numerito";
                }
            }
            return $h;
        }
    ?>  

    <?php if (!isset($_POST["num"])): ?>

        <form method="post">
            <input type="text" name="num" required>
            <input type="submit" value="Enviar">
        </form>

    <?php else: ?>


        <?php
                
            echo es_primo($_POST["num"]);
            
        ?>
    <?php endif?>

</body>
</html>