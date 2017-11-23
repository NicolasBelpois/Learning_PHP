<?php
class Math {

  public $num;

  public function add($num) {
    for ($i=0; $i < count($num) ; $i++) {


    }
    echo $num[0] + $num[1];
  }
  public function sous($num) {
    for ($i=0; $i < $num ; $i++) {
        echo $num[0] - $num[1];
        break;
    }
  }
  public function div($num) {
    for ($i=0; $i < $num ; $i++) {
        echo $num[0] / $num[1];
        break;
    }
  }
  public function multi($num) {
    for ($i=0; $i < $num ; $i++) {
        echo $num[0] * $num[1];
        break;
    }
  }

}
