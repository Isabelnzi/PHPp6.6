<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <?php
    //on test si une variable existe
    if(isset($_GET['building']) && isset($_GET['room'])){ // variable a tester
        echo $_GET['building'] . ' ' . $_GET['room'];
    }
    ?>
  </body>
</html>
