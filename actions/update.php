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


if(isset($_POST['update'])) {
  $city = $_POST['city'];
  $img = $_POST['img'];
  $address = $_POST['address'];
  $web = $_POST['web'];
  $location_id = $_POST['location_id'];
  $zip = $_POST['zip'];

  $sql = "UPDATE location SET city='$city', img='$img', address='$address', zip='$zip',web='$web' WHERE location_id='$location_id'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully updated</h2>";
 } else {
   echo "Update error for: " . $sql . "\n" . mysqli_error($conn);
 }
 
}

if(isset($_POST['update2'])) {
  $name = $_POST['name'];
  $tel = $_POST['tel'];
  $type = $_POST['type'];
  $desc = $_POST['desc'];
  $id =$_POST['id'];

  $sql = "UPDATE restaurant SET restaurant_name='$name', restaurant_type='$type', tel='$tel',restaurant_desc='$desc' WHERE restaurant_id='$id'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully updated</h2>";
 } else {
   echo "Update error for: " . $sql . "\n" . mysqli_error($conn);
 }
 
}

if(isset($_POST['update3'])) {
  $name = $_POST['name'];
  $type = $_POST['type'];
  $desc = $_POST['desc'];
  $id =$_POST['id'];

  $sql = "UPDATE things_to_do SET things_name='$name', things_type='$type', things_desc='$desc' WHERE things_id='$id'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully updated</h2>";
 } else {
   echo "Update error for: " . $sql . "\n" . mysqli_error($conn);
 }
 
}

if(isset($_POST['update4'])) {
  $name = $_POST['name'];
  $date = $_POST['date'];
  $desc = $_POST['desc'];
  $time = $_POST['time'];
  $price = $_POST['price'];
  $id =$_POST['id'];

  $sql = "UPDATE concert SET concert_name='$name', concert_date='$date', concert_desc='$desc', concert_time='$time', concert_price='$price' WHERE concert_id='$id'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully updated</h2>";
 } else {
   echo "Update error for: " . $sql . "\n" . mysqli_error($conn);
 }
 
}

if(isset($_GET['upgradeuser'])) {
  $id =$_GET['upgradeuser'];

  $sql = "UPDATE users SET userRole=1 WHERE userId='$id'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully updated</h2>";
 } else {
   echo "Update error for: " . $sql . "\n" . mysqli_error($conn);
 }
 
}
 ?>