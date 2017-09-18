<?php

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	include_once("classes/user.class.php");
	include_once("classes/type1.class.php");
	include_once("classes/type2.class.php");

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


	echo "User Level: ".$type1->user_type."<br/>";
	echo "Registered User ID: ".$type1->user_id."<br/>";
	echo "Registered User Type: ".$type1->no_type."<br/>";
	echo "Registered First Name: ".$type1->first_name."<br/>";
	echo "Registered Last Name: ".$type1->last_name."<br/>";
	echo "Registered Email: ".$type1->email_address."<br/>";



	echo "User Level: ".$type2->user_type."<br/>";
	echo "Admin User ID: ".$type2->user_id."<br/>";
	echo "Admin User Type: ".$type2->no_type."<br/>";
	echo "Admin First Name: ".$type2->first_name."<br/>";
	echo "Admin Last Name: ".$type2->last_name."<br/>";
	echo "Admin Email: ".$type2->email_address."<br/>";






 ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>CIT 313 FALL 2017 Intro to OOP</title>

</head>
<body>




</body>
</html>
