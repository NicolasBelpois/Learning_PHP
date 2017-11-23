

<?php
require 'formulaire.php';

$form = new Form;
$form->create('index.php');
$form->villes('text');
$form->button('radio','Oui');
$form->button('radio','Non');
$form->select('select');
$form->textArea();
$form->checkbox('Gloup');
$form->button('Submit','Valider');

$valid = new Validator;
$valid->string(123);
$valid->integrer('ert');
$valid->decimale(12367);

require 'voiture.php';
$car = new Voiture('audi', 2.5, 'BE-345-32', 150000,1986);

  $voitures= [$car];
  foreach ($voitures as $voiture) {
  echo "<table>";
  echo "<tr>";
  echo "<td><php?$voiture->stock();?></td>";
  echo "<td>$voiture->categorie();</td>";
  echo "<td>$voiture->origine();</td>";
  echo "<td>$voiture->kilometre();</td>";
  echo "<td>$voiture->circulation();</td>";
  echo "</tr>";
  echo "</table>";
}
