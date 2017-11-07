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
  $new_word = str_replace("ae", "æ", $key);
  echo "<pre>";
  echo $new_word;
  echo "</pre>";
}
}
change_word();
        ?>
     </p>
     <p>
       <?php
function word_back() {
  $words2 = array('cæcotrophie', 'chænichthys', 'microsphæra', 'sphærotheca');
  foreach ($words2 as $key2) {
    $new_word2 = str_replace("æ", "ae", $key2);
    echo "<pre>";
    echo $new_word2;
    echo "</pre>";
  }
}
word_back();
        ?>
     </p>
     <p>
    <?php
    function erreur($message,$alert){
if (empty($alert)){
return '<div class = info>'.$message.'</div>';
};
return "<div class =" .$alert.'>'.$message.'</div>';
};
echo erreur("Email invalide","warning");
        ?>
     </p>
     <p>
<?php
function RandomWord($length){
    $word = "";
    $lettre = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s","t", "u", "v", "w", "x", "y", "z"];
      for ($i = 0; $i < $length ; $i++) {
        $word .= $lettre[array_rand($lettre)];
      };
      return $word;
  };
  echo RandomWord(5);
  echo RandomWord(15);
 ?>
     </p>
     <p>
       <?php
       function Minuscule($input){
         return mb_strtolower($input);
       };
       echo Minuscule("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!");
        ?>
     </p>
     <p>
       <?php


  function volume_un_cone() {
    $rayon = 5;
    $hauteur = 2;
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
    return $volume;
}
echo volume_un_cone();
        ?>
     </p>
     <p>
       <?php
       function reverse_string($input){
           return strrev($input);
 }
         echo reverse_string('Bonjour tout le monde');
        ?>
     </p>
<p>
  <?php
  function song() {
  $chanson = 'Buvons un coup ma serpette est perdue';
$voyelle = array('a','e','i','o','u','y');
$substitutions = array( 'E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN');
foreach ($substitutions as $key => $value) {
  $new_song = str_replace($voyelle, $value, $chanson);
}
  return $new_song;
}
echo song();
   ?>
</p>

  </body>
</html>
