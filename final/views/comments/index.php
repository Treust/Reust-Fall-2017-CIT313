<?php
include('views/elements/header.php')

;?>
<div class="container">
	<div class="page-header">
   <h1>Comment</h1>

	 <?php if($message){?>
    <div class="alert alert-success">
      	<?php echo $message?>
    </div>
  <?php }?>
        ?>

   <?php include('views/elements/comment_form.php');
	 ?>

	 
   </div>
</div>
<?php include('views/elements/footer.php');?>
