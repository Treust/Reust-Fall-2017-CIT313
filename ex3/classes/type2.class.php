<?php
class type2 extends user{


public function __construct($type) {
  parent::__construct($type);
  $this->user_type = 'Administrator';
  $this->no_type = $type;
}

public function __set($name,$value) {
  $this->$name = $value;
  return;
}

public function __get($name) {
  return $this-> $name;
}

public function __destruct() {

}

}
?>
