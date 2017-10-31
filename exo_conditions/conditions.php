<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercices php</title>
  </head>
  <body>
<p> <?php $chambre_est_sale = false;
          $chambre_est_depotoire = true;
          $chambre_est_bien_ranger = false;
          $chambre_est_immaculer = false;


    if ($chambre_est_sale == true) {
      echo "Range ta chambre, on dirait la cage d'un bonobo!";
    } elseif ($chambre_est_bien_ranger == true) {
      echo "Bravo voila une chambre trés bien ranger !";
    } elseif ($chambre_est_immaculer == true) {
      echo "Ta chambre est trop propre, vis un peu!";
    } else {
      echo "Ta chambre est vraiment un dépotoire range moi ça !";
    }
    ?></p>
<p> <?php $time = 12.30;

    if ($time > 5 and $time <= 9) {
      echo "Bonjour !";
    } elseif ($time > 9.1 and $time <= 12) {
      echo "Bonne journée !";
    } elseif ($time > 12.1 and $time <= 16) {
      echo "Bonne après-midi !";
    } elseif ($time > 16.1 and $time <= 21) {
      echo "Bonne soirée !";
    } elseif ($time > 21.1 and $time <= 4.59) {
      echo "Bonne nuit !";
    }

    ?></p>

    <form action="" method="get">
      <input type="number" name="age">

      <input type="radio" name="genre" value="Homme">
      <label for="Homme">Homme</label>

      <input type="radio" name="genre" value="Femme">
      <label for="femme">Femme</label>
<br><br>
      <label for="">Do you speak English ?</label>
      <input type="radio" name="language" value="yes">
      <label for="yes">Yes</label>

      <input type="radio" name="language" value="non">
      <label for="non">Non</label>
    </form>
    <p><?php
   extract($_GET);


   if ($age < 12 and $language == "non") {
     if ($genre == "Homme") {
     echo "Salut petit !";
      } else {
     echo "Salut petite !";
    }
  } elseif ($age >= 12 and $age< 18 and $language == "non") {
     if ($genre == "Homme") {
     echo "Salut l'ado !";
      } else {
         echo "Salut l'adolecente !";
   }
 } elseif ($age >= 18 and $age <= 99 and $language == "non") {
     if ($genre == "Homme") {
       echo "Salut l'homme !";
     } else {
       echo "Salut la femme !";
   }
 } elseif ($age > 99 and $language == "non") {
     if ($genre == "Homme") {
       echo "Toujours vivant le vieux ?";

     }else {
       echo "Toujours vivant la vielle ?";
     }
   }
   ?></p>

   <p><?php
  extract($_GET);


  if ($age < 12 and $language == "yes") {
    if ($genre == "Homme") {
    echo "Hello Boy !";
     } else {
    echo "Hello Girl !";
   }
  } elseif ($age >= 12 and $age< 18 and $language == "yes") {
    if ($genre == "Homme") {
    echo "Hi Kiddo !";
     } else {
        echo "Hi biatch !";
  }
} elseif ($age >= 18 and $age <= 99 and $language == "yes") {
    if ($genre == "Homme") {
      echo "Hello Man !";
    } else {
      echo "Heloo Women !";
  }
  } elseif ($age > 99 and $language == "yes") {
    if ($genre == "Homme") {
      echo "Still alive old man ?";

    }else {
      echo "Still alive old women ?";
    }
  }
  ?></p>

<form action="conditions.php" method="post">
  <label for="note">Inscrit ta note entre 0 et 20</label>
  <input type="number" name="note_eleve" value="">
</form>
<?php
extract($_POST);

if ($note_eleve <= 3) {
  echo "Tu est trop nul !";
}
?>

  </body>
</html>
