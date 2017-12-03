<?php
include('views/elements/header.php');?>


<div class="container">

	<div class="page-header">
    <h1>Latest News From <?php echo $rss_title; ?></h1>
		<figure>
		<img src="views/img/breaking_news1.jpg" />
		</figure>
		<h2>Here you will find the most up to date headlines for Indianapolis and the surrounding areas</h2>
  </div>
	<?php
	echo $data;
	?>
</div>
<?php include('views/elements/footer.php');?>
