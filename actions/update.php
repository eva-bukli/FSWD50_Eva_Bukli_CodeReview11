<?php 
if(isset($_GET['like'])) {
  $likeid = $_GET['like'];
  
  $sql = "UPDATE `concert` SET `concert_like` = `concert_like`+1 WHERE `concert_id`='$likeid'";
  $sql2 = "UPDATE `restaurant` SET `restaurant_like` = `restaurant_like`+1 WHERE `restaurant_id`='$likeid'";
  $sql3 = "UPDATE `things_to_do` SET `things_like` = `things_like`+1 WHERE `things_id`='$likeid'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully liked</h2>";
 } else {
   echo "Delete error for: " . $sql . "\n" . mysqli_error($conn);
 }
header("Location:home.php"); 
}

if(isset($_GET['like'])) {
  $likeid = $_GET['like'];
  
  $sql = "UPDATE `restaurant` SET `restaurant_like` = `restaurant_like`+1 WHERE `restaurant_id`='$likeid'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully liked</h2>";
 } else {
   echo "Delete error for: " . $sql . "\n" . mysqli_error($conn);
 }
header("Location:home.php"); 
}

if(isset($_GET['like'])) {
  $likeid = $_GET['like'];
  
  $sql = "UPDATE `things_to_do` SET `things_like` = `things_like`+1 WHERE `things_id`='$likeid'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully liked</h2>";
 } else {
   echo "Delete error for: " . $sql . "\n" . mysqli_error($conn);
 }
header("Location:home.php"); 
}

 ?>