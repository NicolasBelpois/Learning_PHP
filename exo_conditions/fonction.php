<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exofonctions</title>
  </head>
  <body>
    <p>
      <?php
function capitale() {
  $name = 'maxime';
  echo ucfirst($name);
}
capitale();
       ?>
    </p>
    <p>
      <?php
echo date('Y');
       ?>
    </p>
    <p><?php
echo date('d/m/Y h:i:s')
     ?></p>
     <p>
       <?php
function add() {
  $a = 10;
  $b = 5;
  if (is_int($a) == true AND is_int($b) == true) {
  return $a + $b;
} else {
  echo "Erreur, argument non numérique";
}
}
echo add();
        ?>
     </p>
     <p>
       <?php

function word_capitale() {
  $phrase = "In code we trust.";
  $mot = explode(" ", $phrase);
  foreach ($mot as $key) {
  $first = substr($key, 0, 1);
    echo ucfirst($first);
  }

}
word_capitale();
        ?>
     </p>
     <p>
       <?php
       function change_word() {
$words = array("caecotrophie", "chaenichthys","microsphaera", "sphaerotheca");
foreach ($words as $key) {
  str_replace("ae", "æ")
}
}
        ?>
     </p>

  </body>
</html>
