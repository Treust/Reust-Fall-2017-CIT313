<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

abstract class model {

    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;


    public function __construct($level) {
        $this->user_level = $level;
    }

    public function __set($name,$value) {

    }

    public function __get($name) {

    }

    public function __destruct() {

    }


}
 ?>
