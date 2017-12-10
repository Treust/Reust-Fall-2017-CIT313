<form id="comment_form" action="<?php echo BASE_URL;?>comment/<?php echo $task?>" method="post" onsubmit="editor.post()">

<fieldset>
<legend>Comment Now!</legend>



  <label for="date">Date</label>
  <?php // set timezone
date_default_timezone_set('America/Indiana/Indianapolis');?>
  <input name="date" id="date" size="16" type="date" value="<?php echo $date = date('Y-m-d H:i:s'); ?>"></br>



  <label>Content</label>
  <textarea id="tinyeditor" name="comment" style="width:556px;height: 200px"></textarea>
  <br/>
  <input type="hidden" name="uID" value="<?php echo $uID?>"/>
  <input type="hidden" name="postID" value="<?php echo $pID?>"/>

<button id="submit" type="submit" class="btn btn-primary" >Get Comments</button>
</fieldset>
</form>
