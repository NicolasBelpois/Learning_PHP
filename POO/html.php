<?php

class HTML {

  public $link;
  public $meta;
  public $img;
  public $href;
  public $java;
  public $alt;
  public $value;

public function css($link){
  echo "<p><link rel="stylesheet" href="$link"></p>";
  }
public function meta($meta){
  echo "<p><meta charset="$meta"></p>";
  echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
  echo "<meta http-equiv='X-UA-Compatible' content='ie=edge'>";
  }
public function image($img,$alt){
  echo "<p><img src="$img" alt="$alt"></p>";
  }
public function lien($href,$value){
  echo "<p><a href='$href'>$value</a></p>";
  }
public function java($java){
  echo "<p><script type='text/javascript' src='$java'></script></p>";
  }
}
 ?>
