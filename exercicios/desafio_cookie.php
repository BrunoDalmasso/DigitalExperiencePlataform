<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php
    if (isset($_COOKIE['passou'])) {
      echo 'Voce ja passou por aqui.';
    } else {
      echo 'Voce nunca passou por aqui';

      setcookie('passou', 'sim', time() + 3600);
    }
  ?>

  </body>
</html>
