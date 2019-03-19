<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<?php 
  include "db.php";
  include "functions.php";

  if(isset($_POST['deleta'])){
    deletar();
  }
?>

<div class="container">
  <div class="col-sm-6">
    <form action="login_delete.php" method="post">
      <select name="id">
        <?php
          mostraDados();
        ?>
      </select>

      <input class="btn btn-primary" type="submit" name="deleta" value="ATUALIZAR">

    </form>
  </div>
</div>




  </body>
</html>
