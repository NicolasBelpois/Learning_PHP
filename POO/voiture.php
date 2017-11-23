<?php

class Voiture {

    private $matricul;
    private $mise_circu;
    public $kilometre;
    private $model;
    private $marque;
    public $color;
    public $poid;

public function __construct($stock,$categorie,$origine,$kilometre,$circulation){
  $this->stock = $stock;
  $this->categorie = $categorie;
  $this->origine = $origine;
  $this->kilometre = $kilometre;
  $this->circulation = $circulation;

}

    public function stock()
    {
      if ($this->stock = 'Audi') {
        echo "Ce modèle est reservez.";
      }else {
        echo "Ce modèle est en stock.";
      }
    }
    public function categorie()
    {
      if ($this->categorie >= 3.5) {
        echo "Votre voiture rentre dans la catégorie 'Utilitaire'.";
      }else {
        echo "Votre voiture rentre dans la catégorie 'Commerciale'.";
      }
    }
    public function origine()
    {
      if (stristr($this->origine, 'BE') == True) {
        echo "Origine Belgique";
      }elseif (stristr($this->origine, 'FR') == True) {
        echo "Origine France";
      }elseif (stristr($this->origine, 'DE') == True) {
        echo "Origine Allemagne";
      }else {
        echo "Origine non définit.";
      }

    }
    public function kilometre()
    {
      if ($this->kilometre < 100000) {
        echo "Low Use";
      }elseif ($this->kilometre >= 100000 AND $this->kilometre < 200000) {
        echo "Medium Use";
      }elseif ($this->kilometre > 200000) {
        echo "High Use";
      }
    }
    public function circulation()
    {
      $année = date('Y');
      $age = $année - $this->circulation;
      echo "$age ans.";
    }
    public function drive()
    {
      $this->kilometre = $this->kilometre + 100000;
      echo "$this->kilometre";


    }
    public function display()
    {
      $voitures= [$car];
      foreach ($voitures as $voiture) {
      echo "<table>";
      echo "<tr>";
      echo "<td>$voiture->stock()></td>";
      echo "<td>$voiture->categorie();</td>";
      echo "<td>$voiture->origine();</td>";
      echo "<td>$voiture->kilometre();</td>";
      echo "<td>$voiture->circulation();</td>";
      echo "</tr>";
      echo "</table>";
    }
}
}


 ?>
