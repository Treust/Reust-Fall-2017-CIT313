<?php
abstract class user{
  protected $user_id;
  protected $user_type;
  protected $first_name;
  protected $last_name;
  protected $email_address;
  protected $user_level;
  protected $no_type;

public function __construct($type) {
$this->user_type = $type;
}

public function __set($name,$value) {

}

public function __get($name) {

}

public function __destruct() {

}

}
?>
