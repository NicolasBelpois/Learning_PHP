<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo boucles</title>
  </head>
  <body>
    <p><?php
    $pronoms_personnels = array('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Ils/Elles');

foreach ($pronoms_personnels as $key) {
  if ($key == "Je") {
    echo "$key Code";
  } elseif ($key == 'Tu') {
    echo "$key Codes";
  } elseif ($key == 'Il/Elle') {
    echo "$key Code";
  } elseif ($key == 'Nous') {
    echo "$key Codons";
  } elseif ($key == 'Vous') {
    echo "$key Codez";
  } elseif ($key == 'Ils/Elles') {
    echo "$key Codent";
  }
}
     ?></p>
     <p><?php
$while_boucle = 1;
while ($while_boucle <= 120) {
  echo "$while_boucle";
  $while_boucle++;
}
      ?></p>
      <p><?php
$for_boucle = 0;
for ($for_boucle=1; $for_boucle <= 120 ; $for_boucle++) {
  echo "$for_boucle";
}
      ?></p>
      <p><?php
$classe_name = array('Thomas', 'Eliase', 'Kevin', 'Ornella', 'Syl', 'Laureen');
  foreach ($classe_name as $key) {
  print_r($key);
  }
       ?></p>

       <p>
         <form action="boucles.php" method="post">
           <label for="pays">Choisi ton pays de résidence.</label>
          <select  name="pays">
            <option value="FR">France</option>
            <option value="IT">Italie</option>
            <option value="EN">Angleterre</option>
            <option value="IR">Irlande</option>
            <option value="ES">Espagne</option>
            <option value="AL">Allemagne</option>
            <option value="BE">Belgique</option>
            <option value="ET">Estonie</option>
            <option value="CR">Croatie</option>
            <option value="SU">Suisse</option>
          </select>

           <input type="submit" name="" value="Envoyer">

         </form>
         <?php
$country_select = array("FR" => "France", "IT" => "Italie", "EN" => "Angleterre", "IR" => "Irlande", "ES" => "Espagne", "AL" => "Allemagne", "BE" => "Belgique", "ET" => "Estonie", "CR" => "Croatie", "SU" => "Suisse");
          ?>
       </p>
  </body>
</html>
