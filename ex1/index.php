<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require('includes/header.inc.html');

function tell_me_switch($data) {
	//accomplish the exercise via SWITCH statement.
	$retval = "<ul>";
	foreach($data as $key=>$item) {
		switch($key) {
			case 'color':
			$retval .= "<li>My favorite color is: $item</li>";
			break;

			case 'movie':
			$retval .="<li>My favorite movie is: $item</li>";
			break;

			case 'book':
			$retval .="<li>My favorite book is: $item</li>";
			break;

			case 'website':
			$retval .="<li>My favorite website is: $item</li>";
			break;


		}
	}
	$retval .= "</ul>";
	return $retval;
}

function tell_me_if($data) {

	$retval = "<ul>";
	foreach($data as $key=>$item) {
		if($key != 'name') {
			$retval .= "<li>My favorite $key is: $item</li>";
		}

	}
	$retval .= "</ul>";
	return $retval;
}

$myArray = array('name' => 'Tom Reust', 'color' => 'Blue', 'movie' => 'Blackhawk Down', 'book' => 'We were soldiers once and young', 'website' => 'www.yahoo.com');

$myName = $myArray['name'];
echo "<h1>$myName</h1>";

//THIS IS THE METHOD TO ACCOMPLISH EXERCISE VIA SWITCH STATEMENT
$myData = tell_me_switch($myArray);
echo $myData;

//THIS IS THE METHOD TO ACCOMPLISH EXERCISE VIA IF THEN STATEMENT
//$myData = tell_me_if($myArray);
//echo $myData;

require('includes/footer.inc.html');
?>
