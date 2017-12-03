<?php
include('elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Add Comment</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">
				<form action="<?php echo BASE_URL?>comments/<?php echo $task?>" method="post" onsubmit="editor.post()">


	        <label for="date">Date</label>
	        <?php // set timezone
	date_default_timezone_set('America/Indiana/Indianapolis');?>
	        <input name="date" id="date" size="16" type="date" value="<?php echo $date = date('Y-m-d H:i:s'); ?>"></br>



	        <label>Content</label>
	        <textarea id="tinyeditor" name="comment" style="width:556px;height: 200px"></textarea>
	        <br/>
	        <input type="hidden" name="uID" value="<?php echo $uID?>"/>
	        <input type="hidden" name="postID" value="<?php echo $pID?>"/>

	        <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
	      </form>


      </div>
    </div>
</div>
