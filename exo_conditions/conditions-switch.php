<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exoSwitch</title>
  </head>
  <body>
    <form action="conditions-switch.php" method="post">
      <label for="note">Inscrit ta note entre 0 et 20</label>
      <input type="number" name="note_eleve" >
    </form>
    <?php
extract($_POST);

    switch ($note_eleve) {
      case 0:
      case 1:
      case 2:
      case 3:
      case 4:
      case 5:
        echo "Tu est trop nul !";
        break;
        case 6:
        case 7:
        case 8:
        case 9:
          echo "Peut mieux faire !";
          break;
          case 10:
            echo "Pile poil, bien jouer !";
            break;
            case 11:
            case 12:
            case 13:
            case 14:
              echo "Pas mal du tout continue !";
              break;
              case 15:
              case 16:
              case 17:
              case 18:
                echo "Trés bien tu touche les etoiles !";
                break;
                case 19:
                case 20:
                  echo "Police ! ont a un tricheur !!";
                  break;

      default:
        echo "enter une note entre 0 et 20";
        break;
    }
     ?>
     <p><?php
$age = 19;
$sexe = "femme";
if ($age > 21 and $sexe == "femme") {
  echo "Bonjour, bienvenue parmis nous.";
}{
  echo "Désolé, vous ne remplissez pas les critères.";
}
      ?></p>
  </body>
</html>
