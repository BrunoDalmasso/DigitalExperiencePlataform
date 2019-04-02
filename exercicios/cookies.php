<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php
    // funcao setcookie, tem 3 paramentros
    // nome
    // valor
    // tempo de expiração

    $nome = 'nomeDoCookie';
    $valor = 100;
    $expira = time() + (60 * 60 * 24 * 7);

    setcookie($nome, $valor, $expira);

    if (isset($_COOKIE['nomeDoCookie'])) {
        $nomeRecebido = $_COOKIE['nomeDoCookie'];
        echo $nomeRecebido;
    }
  ?>

  </body>
</html>
