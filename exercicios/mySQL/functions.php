<?php
    include "db.php";

    function mostraDados() {
        global $connect;

        $query = "SELECT * FROM usuario";
        $resultado = mysqli_query($connect, $query);

        while($row = mysqli_fetch_assoc($resultado)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function atualiza() {
        global $connect;

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        // QUERY, PARA ATUALIZAR OS DADOS DE ACORDO COM OS IDs:
        $query = "UPDATE usuario SET username='$username', password='$password' WHERE id=$id";

        // FUNÇÃO QUE EXECUTA QUERIES
        $resultado = mysqli_query($connect, $query);

            // VALIDAÇÃO
        if(!$resultado){
            echo "Não deu certo a alteração";
        } else {
            echo "Dados atualizados com sucesso";
        }
    }

    function cria() {
        global $connect;

        if(!$connect){
            echo 'Vish, deu ruim!';
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        // QUERY, PARA INSERIR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS:
        $query = "INSERT INTO usuario(username, password) VALUES ('$username', '$password')";

        // FUNÇÃO QUE EXECUTA QUERIES
        $resultado = mysqli_query($connect, $query);

        // VALIDAÇÃO
        if(!$resultado) {
            echo "Não deu certo a inclusão";
        } else {
            echo "Dados criados com sucesso";
        }
    }

    function ler() {
        global $connect;

        $query = "SELECT * FROM usuario";
        $resultado = mysqli_query($connect, $query);

        while($row = mysqli_fetch_assoc($resultado)) {
            echo "<pre>" . print_r($row) . "</pre>";
        }
    }

    function deletar() {
        global $connect;

        $id = $_POST['id'];

        // QUERY, PARA ATUALIZAR OS DADOS DE ACORDO COM OS IDs:
        $query = "DELETE FROM usuario WHERE id=$id";

        // FUNÇÃO QUE EXECUTA QUERIES
        $resultado = mysqli_query($connect, $query);

            // VALIDAÇÃO
        if(!$resultado){
            echo "Não deu certo a alteração";
        } else {
            echo "Dados atualizados com sucesso";
        }
    }
?>