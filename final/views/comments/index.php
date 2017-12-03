<?php
include('views/elements/header.php')

;?>
<div class="container">
	<div class="page-header">
   <h1>Comment</h1>

   <?php if(isset($error)) { ?>
        <div class="alert alert-danger">
            <?php echo $error;?>
        </div>

        <?php
   }
        ?>

   <?php include('views/elements/comments_form.php');?>
   
  </div>
</div>
<?php include('views/elements/footer.php');?>
