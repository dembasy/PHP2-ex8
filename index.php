<?php
$isOk = true;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 8</title>
  </head>
  <body>
    <p>
      <?php
        if ($isOk == true) {
          echo 'c\'est ok !!!';
        }
        else {
          echo 'c\'est pas bon';
        }
      ?>
    </p>
  </body>
</html>
