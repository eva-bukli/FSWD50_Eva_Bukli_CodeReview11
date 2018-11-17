<?php
include ("header.php");?>
<h1 class="my-4">TravelMatic
	<small>Blog</small>
</h1>
</div>
<div class="container mb-4">
<div class="row mb-4">
	<?php 
	include ("restaurants.php");
	include ("concerts.php"); 
	include ("thingstodo.php");?>
</div>
</div>
<?php include ("footer.php");
ob_end_flush(); ?>