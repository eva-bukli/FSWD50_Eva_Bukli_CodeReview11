<?php
include ("header.php");?>
<h1 class="my-4">TravelMatic
	<small>Blog</small>
</h1>
</div>
<div class="container">
<div class="row">
	<?php include ("restaurants.php");?>

<?php //solution with class, also working:
	//$newPrint = new Printing();
	//$newPrint->printRestaurant();?>

</div></div>
<?php include ("footer.php");
ob_end_flush(); ?>