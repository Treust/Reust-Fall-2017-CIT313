<?php
class controller {

  public $load;
  public $model;

  function __construct () {

    $this->load = new Load();
    $this->model = new Model();
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
