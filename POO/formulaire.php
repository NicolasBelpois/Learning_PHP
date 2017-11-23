<?php
Class Form {

  public $action;
  public $villes;
  public $select;
  public $button;
  public $textArea;
  public $value;




  public function create($action)
  {
    echo "<p><form action='$action' method='post'></p>";
  }
  public function villes($villes)
  {
    echo "<p><input type='$villes'></p>";
  }
  public function checkbox($value)
  {
    echo "<p><input type='checkbox'>$value</input></p>";
  }

  public function button($button,$value)
  {
    echo "<p><button type='$button'>$value</button></p>";
  }
  public function textArea()
  {
    echo "<p><textarea></textarea></p>";
  }
  public function select($select) {

    echo "<p><select>$select</select></p>";
  }
}

class Validator {

  public $value;

  public function string($value)
  {
    if (is_string($value) === true) {
      echo "<p>$value  est une chaine de caractères.</p>";
    }else {
      echo "<p>$value n'est pas une chaine de caractères.</p>";
    }
  }
  public function integrer($value)
  {
    if (is_int($value) === true) {
      echo "<p>$value est un entier.</p>";
    }else {
      echo "<p>$value n'est pas un entier</p>";
    }
  }
  public function decimale($value)
  {
    if (is_float($value) === true) {
      echo "<p>$value est un nombre décimale.</p>";
    }else {
      echo "<p>$value n'est pas un nombre décimale.</p>";
    }
  }

}
?>
