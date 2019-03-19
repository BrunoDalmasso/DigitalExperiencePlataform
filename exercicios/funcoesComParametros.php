<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Funções com parametro</title> 
</head>
<body>
    <h1></h1>

    <?php 
        function somar($x, $y) {
            return $x + $y;
        }

        function subtrair($x, $y) {
            return $x - $y;
        }

        function multiplicar($x, $y) {
            return $x * $y;
        }

        function dividir($x, $y) {
            return $x / $y;
        }

        echo somar(122, 78) . '<br>';
        echo subtrair(122, 78) . '<br>';
        echo multiplicar(122, 78) . '<br>';
        echo dividir(122, 78) . '<br>';

    ?>

</body>
</html>