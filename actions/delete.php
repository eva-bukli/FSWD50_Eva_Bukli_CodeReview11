<?php 
if(isset($_POST['delete'])) {
  $location_id = $_POST['delete'];

  $sql = "DELETE FROM location WHERE location_id='$location_id'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully deleted</h2>";
 } else {
   echo "Delete error for: " . $sql . "\n" . mysqli_error($conn);
 }
 
}

if(isset($_POST['deleterest'])) {
  $restaurant_id = $_POST['deleterest'];

  $sql = "DELETE FROM restaurant WHERE restaurant_id='$restaurant_id'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully deleted</h2>";
 } else {
   echo "Delete error for: " . $sql . "\n" . mysqli_error($conn);
 }
 
}
if(isset($_POST['deletecon'])) {
  $concert_id = $_POST['deletecon'];

  $sql = "DELETE FROM concert WHERE concert_id='$concert_id'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully deleted</h2>";
 } else {
   echo "Delete error for: " . $sql . "\n" . mysqli_error($conn);
 }
 
}
if(isset($_POST['deletethings'])) {
  $things_id = $_POST['deletethings'];

  $sql = "DELETE FROM things_to_do WHERE things_id='$things_id'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully deleted</h2>";
 } else {
   echo "Delete error for: " . $sql . "\n" . mysqli_error($conn);
 }
 
}

if(isset($_GET['deleteuser'])) {
  $user_id = $_GET['deleteuser'];

  $sql = "DELETE FROM users WHERE userId='$user_id'";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully deleted</h2>";
 } else {
   echo "Delete error for: " . $sql . "\n" . mysqli_error($conn);
 }
 
}
 ?>