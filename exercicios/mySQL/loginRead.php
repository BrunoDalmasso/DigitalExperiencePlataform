<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  <body>

    <?php
        $connect = mysqli_connect('localhost', 'root', 'labfiap$2018', 'exemplo');

        if (!$connect) {
            echo 'So que não';
        } else {
            // Query para inserir os dados de acordo com minhas variaveis
            $query = "SELECT * FROM USUARIO";

            // Função para executar querys
            $resultado = mysqli_query($connect, $query);

            if (!$resultado) {
                echo 'Deu ruim para pesquisar os caras';
            } else {
            }
        }
    ?>

    <div class="container">
        <div class="col-sm-6">
            <?php
                while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
                    <pre>
            <?php
                    print_r($row);
                }
            ?>
                    </pre>
        </div>
    </div>

  </body>
</html>
