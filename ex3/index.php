<?php

	ini_set('display_errors',1);
	error_reporting(E_ALL);

function myLoad($class){
	include_once('classes/'.strtolower($class).'.class.php');
}

spl_autoload_register('myLoad');

$type1 = new type1('1');
$type2 = new type2('2');

$type1->user_id = 'Treust';
$type1->first_name = 'Tom';
$type1->last_name = 'Reust';
$type1->email_address = 'treust@iupui.edu';

$type2->user_id = 'AdminUser';
$type2->first_name = 'Test';
$type2->last_name = 'User';
$type2->email_address = 'tUser@iupui.edu';

$testStatic = type1::doMath(6,2);


	//echo "User Level: ".$type1->user_type."<br/>";
	//echo "Registered User ID: ".$type1->user_id."<br/>";
	//echo "Registered User Type: ".$type1->no_type."<br/>";
	//echo "Registered First Name: ".$type1->first_name."<br/>";
	//echo "Registered Last Name: ".$type1->last_name."<br/>";
	//echo "Registered Email: ".$type1->email_address."<br/>";

	echo"<hr/>";

	echo "$testStatic is my static math function<br/>";

	echo"<hr/>";

	//echo "User Level: ".$type2->user_type."<br/>";
	//echo "Admin User ID: ".$type2->user_id."<br/>";
	//echo "Admin User Type: ".$type2->no_type."<br/>";
	//echo "Admin First Name: ".$type2->first_name."<br/>";
	//echo "Admin Last Name: ".$type2->last_name."<br/>";
	//echo "Admin Email: ".$type2->email_address."<br/>";

 ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>CIT 313 FALL 2017 Intro to OOP</title>

</head>
<h1>User Registration</h1>


<form id="registrationForm" method = "post" action="results.php">
  <p>
    <label for "firstName">First Name <span> (required, at least 2 characters)</span></label>
    <input id="firstName" name="fName" minlength="2" type="text" required/>
  </p>
	<p>
		<label for "lastName">Last Name <span> (required, at least 2 characters)</span></label>
		<input id="lastName" name="lName" minlength="2" type="text" required/>
	</p>
  <p>
    <label for "email">E-mail <span> (required, won't be published)</span></label>
    <input id="email" type="email" name="email" required/>
  </p>
	<p>
    <input class="submit" type="submit" value="Submit" />
  </p>

</form>


</html>
