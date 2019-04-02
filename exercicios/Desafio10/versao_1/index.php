<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Desafio 10</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <?php
            $media = 0;

            if(isset($_GET['calcular'])){
                $am = $_GET['am'];
                $ps = $_GET['ps'];
                $nac = $_GET['nac'];
                $nome = $_GET['nome'];
                $disciplina = $_GET['disciplina'];

                $media = ($am * 0.3) + ($nac * 0.2) + ($ps * 0.5);
            }
        ?>

        <div class="container">
            <h2 class="text-center">Desafio 10 - Nota</h2>

            <div class="col-sm-6">
                <form action="index.php" method="get">
                    <div class="form-group">
                        <div>
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control">
                        </div>

                        <div>
                            <label>Disciplina</label>
                            <input type="text" name="disciplina" class="form-control">
                        </div>

                        <div>
                            <label>NAC</label>
                            <input type="text" name="nac" class="form-control">
                        </div>

                        <div>
                            <label>PS</label>
                            <input type="text" name="ps" class="form-control">
                        </div>

                        <div>
                            <label>AM</label>
                            <input type="text" name="am" class="form-control">
                        </div>
                    </div>

                    <input class="btn btn-primary" type="submit" name="calcular" value="Calcular Media">
                </form>

                <div>
                    <br>
                    <?php 
                        if ($media != 0) {
                            if ($media > 6) {
                                echo '<div class="alert alert-success  " role="alert">' .
                                        $nome
                                    . ' sua media é de '.
                                        $media
                                    . ' em ' .
                                        $disciplina
                                    . '</div>';
                            } else if ($media < 6) {
                                echo '<div class="alert alert-danger " role="alert">' .
                                        $nome
                                    . ' sua media é de '.
                                        $media
                                    . ' em ' .
                                        $disciplina
                                    . '</div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>