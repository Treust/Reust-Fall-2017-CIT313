<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Registration View </h1>
   <?php echo $numbers ?>
  </div>
</div>
<?php include('elements/footer.php');?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>CIT 313 FALL 2017 Intro to OOP</title>

</head>
<h1>User Registration</h1>


<form id="registrationForm" method = "post" action="results.php">
  <p>
    <label for "firstName">First Name <span> (required, at least 2 characters)</span></label>
    <input id="firstName" name="first_name" minlength="2" type="text" required/>
  </p>
	<p>
		<label for "lastName">Last Name <span> (required, at least 2 characters)</span></label>
		<input id="lastName" name='last_name" minlength="2" type="text" required/>
	</p>
  <p>
    <label for "email">E-mail <span> (required, won't be published)</span></label>
    <input id="email" type="email" name="email" required/>
  </p>
	<p>
		<label for "password">E-mail <span> (required, won't be published)</span></label>
		<input id="password" minlength="2" type="text" name="password" required/>
	</p>
	<p>
    <input class="submit" type="submit" value="Submit" />
  </p>

</form>


</html>
