<?php
require_once('application/config.php');
include('elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Hello From Tom's View<?php echo $_SESSION['uID'];?></h1>
  </div>
</div>
<?php
echo $u->getUserName();
 ?>
<?php include('elements/footer.php');?>
