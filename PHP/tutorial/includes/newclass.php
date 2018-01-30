<?php

class NewClass {

  //properties and methods go here
  public $data = "I am a property";
  public $error = "This is the class called ".__CLASS__."!" ;
  public static $static = 0;

  public function __construct() {
    echo "This class has been instantiated";
  }

  public function __toString() {
    echo "toString method: ";
    return $this->error;
  }

  public static function staticMethod() {
    return self::$static +1;
  }

  public function setNewProperty($newData) {
    $this->data = $newData;
  }

  public function getProperty() {
    return $this->data;
  }

  public function __destruct() {
    echo "This is the end of the class";
  }


}

