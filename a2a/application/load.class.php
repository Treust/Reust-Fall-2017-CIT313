<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

class load {

  function view($file_name, $data=null) {

    if(is_array($data)) {
      extract($data);
    }

    include 'views/'.$file_name;
  }
}


 ?>
