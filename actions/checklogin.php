<?php
ob_start();
session_start();

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
 header("Location: ../index.php");
 exit;
}
// select logged-in users details

$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
  
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

//select the ID and name of the logged in user
$currentuser=$userRow['userId'];
$username=$userRow['userName'];

// select admin or normal users, using different navbars for different options

$res="SELECT * FROM users ";
if(mysqli_query($conn, $res)) {
 if (1==$currentuser) { //if the ID of the logged in user ($currentuser) is not the admin ID...
include ("admin.php");
}
 else {
   include ("notadmin.php"); //..it's just a normal user
 }

}
?>
Hi <?php echo "<b>".$userRow['userName']."</b>!<br>"; ?>
            