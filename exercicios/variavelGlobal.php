<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php
    global $variavelExterna;
    $variavelExterna = "fora <br>";

    function teste() {
        $variavelExterna = "dentro <br>";
    }

    echo $variavelExterna;
    
    teste();

    echo $variavelExterna;
 ?>

  </body>
</html>
