<?php
include ("header.php");?>
<h1 class="my-4">TravelMatic
	<small>Blog</small>
</h1>
</div>
<div class="container">
<div class="row">
	<?php 
	include ("restaurants.php");
	include ("concerts.php"); 
	include ("thingstodo.php");?>
</div>
</div>
<?php include ("footer.php");
ob_end_flush(); ?>