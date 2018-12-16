<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SINGLEPOST</title>
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <!-- PHP STRUCTURE FOR CONDITIONAL HTML -->
      <!-- FIRST TIME. NO DATA IN THE POST (checking a required form field) -->
      <!-- So we must show the form -->

      <?php
      /*MUESTRA LA TABLA QUE METAS POR INPUT*/
	if (!isset($_POST["tablaintroducida"])) : ?>


      <?php else: //phpdestino?>

 

      <?php endif ?>

  </body>
</html>
