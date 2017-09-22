<!DOCTYPE html>
<html >
  <head>
    <title>Computer user registration</title>
  </head>

  <body>



<h1>User Information</h1>



<?php

function newLoad($class){
  	include_once('classes/'.strtolower($class).'.class.php');
}

spl_autoload_register('newLoad');

 $RegisteredUser = new Type1('1');

$RegisteredUser->user_id = 'newuser';
$RegisteredUser->first_name = $_POST["fName"];
$RegisteredUser->last_name =  $_POST["lName"];
$RegisteredUser->email_address = $_POST["email"];


if($RegisteredUser instanceof User){
echo "User Level: ".$RegisteredUser->user_type."<br/>";
echo "Registered User ID: ".$RegisteredUser->user_id."<br/>";
echo "Registered First Name: ".$RegisteredUser->first_name."<br/>";
echo "Registered Last Name: ".$RegisteredUser->last_name."<br/>";
echo "Registered Email: ".$RegisteredUser->email_address."<br/>";
echo "Process completed user registered";
}
else{
  echo "This is a new user";
}
 ?>


  </body>
</html>
