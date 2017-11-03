<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exoternairez</title>
  </head>
  <body>
    <?php
    $genre = "femme";
    $bonjour = ($genre == 'femme') ? true : false;
    if ($bonjour == true) {
      echo "Bonjour madame !";
    } else {
      echo "Bonjour monsieur !";
    }
     ?>
  </body>
</html>
