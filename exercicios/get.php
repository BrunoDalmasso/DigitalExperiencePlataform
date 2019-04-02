<?php
print_r($_GET);
 ?>


<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php
$id = 200;
$button = 'CLIQUE AQUI AGORA';
 ?>
<a href="get.php?id=<?php echo $id;?>"><?php echo $button;?></a>

  </body>
</html>
