<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  <body>

    <?php
        if(isset($_POST['enviar'])) {
            $connect = mysqli_connect('localhost', 'root', 'labfiap$2018', 'desafio');

            if (!$connect) {
                echo 'So que não';
            } else {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                
                // Query para inserir os dados de acordo com minhas variaveis
                $query = "INSERT INTO USUARIO(USERNAME, PASSWORD, EMAIL) 
                          VALUES('$username', '$password', '$email')";

                // Função para executar querys
                $resultado = mysqli_query($connect, $query);

                if (!$resultado) {
                    echo 'Deu ruim para inserir';
                } else {
                    echo 'Opa ta tudo la, talves';
                }

            }
        }
    ?>

    <div class="container">
        <div class="col-sm-6">
            <form action="desafio_8.php" method="post">
                <div class="form-group">
                    <label >Usuario: </label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Senha: </label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" >
            </form>
        </div>
    </div>

  </body>
</html>
