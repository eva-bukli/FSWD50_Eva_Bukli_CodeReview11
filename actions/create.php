<?php 
if(isset($_POST['uploadl'])) {
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $address = $_POST['address'];
  $web = $_POST['web'];
  $img = $_POST['img'];

  $sql = "INSERT INTO location (city, ZIP, address, web, img)
  VALUES ('$city', '$zip', '$address', '$web', '$img')";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully uploaded</h2>";
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}

if(isset($_POST['upload2'])) {
  $name = $_POST['name'];
  $tel = $_POST['tel'];
  $type = $_POST['type'];
  $desc = $_POST['desc'];
  $fk_location = $_POST['loc'];

  $sql = "INSERT INTO restaurant (restaurant_name, tel, restaurant_type, restaurant_desc, fk_location)
  VALUES ('$name', '$tel', '$type', '$desc', '$fk_location')";
  if (mysqli_query($conn, $sql,$last)) {
   echo "<h2 class='mt-4'>Successfully uploaded</h2>";
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}

if(isset($_POST['upload3'])) {
  $name = $_POST['name'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $desc = $_POST['desc'];
  $price = $_POST['price'];
  $fk_location = $_POST['loc'];

  $sql = "INSERT INTO concert (concert_name, concert_date, concert_time, concert_desc, concert_price, fk_location)
  VALUES ('$name', '$date', '$time', '$desc','$price', '$fk_location')";
  if (mysqli_query($conn, $sql,$last)) {
   echo "<h2 class='mt-4'>Successfully uploaded</h2>";
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}

if(isset($_POST['upload4'])) {
  $name = $_POST['name'];
  $type = $_POST['type'];
  $desc = $_POST['desc'];
  $fk_location = $_POST['loc'];

  $sql = "INSERT INTO things_to_do (things_name, things_type, things_desc, fk_location)
  VALUES ('$name', '$type', '$desc', '$fk_location')";
  if (mysqli_query($conn, $sql,$last)) {
   echo "<h2 class='mt-4'>Successfully uploaded</h2>";
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}

?>