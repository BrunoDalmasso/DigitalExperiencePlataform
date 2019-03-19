<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Desafio 4 </title> 
</head>
<body>
    <h1>Imprima na tela as tabuadas de 1 a 10, utilizando os conceitos das aulas anteriores;</h1>
    
    <?php 
        for ($i=1; $i <= 10; $i++) {
            echo 'Tabuada do ' . $i . '<br>';

            for ($x=0; $x<=10; $x++) {
                echo $i . ' x ' . $x . ' = ' . $i*$x;
                echo '<br>';
            }

            echo '<br>';
        }
    ?>
</body>
</html>