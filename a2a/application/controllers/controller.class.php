<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

class controller {

  public $load;
  public $user;

  function __construct () {

    $this->load = new Load();
    $this->user = new user();
    $this->home();
  }

     function home() {

    $data = $this->model->getName();

    $this->load->view('view.php',$data);

  }

  function __set($name, $value)
  {
      // TODO: Implement __set() method.
  }

    function __get($name)
    {
        // TODO: Implement __get() method.
    }

    function __destruct()
  {
      // TODO: Implement __destruct() method.
  }
}

 ?>
