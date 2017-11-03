<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo note</title>
  </head>
  <body>
    <form action="note.php" method="post">
      <label for="note">Inscrit ta note entre 0 et 20</label>
      <input type="number" name="note_eleve" value="0">
    </form>
    <?php
    extract($_POST);


    if ($note_eleve <= 5) {
      echo "Tu est trop nul !";
    }elseif ($note_eleve >5 and $note_eleve <= 9) {
      echo "C'est pas terrible !";
    }elseif ($note_eleve == 10) {
      echo "Tu a la moyenne.";
    }elseif ($note_eleve >10 and $note_eleve <= 14) {
      echo "c'est pas mal";
    }elseif ($note_eleve >14 and $note_eleve <= 18) {
      echo "Bravo trés beau score !";
    }elseif ($note_eleve >18 ) {
      echo "Tu a tricher !!";
    }
    ?>
  </body>
</html>
