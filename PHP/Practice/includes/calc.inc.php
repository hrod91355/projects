<?php

class Calc {

  public $num1;
  public $num2;
  public $cal;

  public function __construct($num1, $num2, $cal) {
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->cal = $cal;

  }

  public function calcMethod(){
    switch ($this->cal) {
      case 'add':
        $results = $this->num1 + $this->num2;
        break;
      case 'sub':
        $results = $this->num1 - $this->num2;
        break;
      case 'mul':
        $results = $this->num1 * $this->num2;
        break;


      default:
        $results = "Error";
        break;
    }
    return $result;
  }

}
