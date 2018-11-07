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
    
    $num = rand(1,5);

    if ($num == 1) {

        echo "One";
    } 

    elseif ($num == 2) {
        echo "Two";
    }

    elseif ($num == 3) {
        echo "Three";
    }

    elseif ($num == 4) {
        echo "Four";
    }

    elseif ($num == 5) {
        echo "Five";
    }
    
    
    ?>
</body>

</html>