<?php 
ob_start();
session_start();
include ("actions/connection.php");
$new = new DBConnection();
$new->makeConn();
// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Travel-O-Matic</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <style>
    html {
    height: 100%;
    box-sizing: border-box;
  }
 #map {
        height: 50%;
      }
      /* Optional: Makes the sample page fill the window. */
  *,
  *:before,
  *:after {
    box-sizing: inherit;
  }

  body {
    position: relative;
    margin: 0!important; 
    padding-top: 0!important;
    padding-bottom: 7rem;
    min-height: 100%;
  }

  footer {
    position: absolute;
    right: 0;
    bottom: 0!important;
    left: 0;
    padding: 1rem;
    text-align: center;
  }
  .profimg {
    width: 100px;
  }

  .navbar {
    border-radius: 0!important;
    margin-bottom: 0!important;
  }

  #exampleFormControlSelect1 
  {
    height: 34px!important;
  }
 .nav-link{
  font-size: 16px;
 
 }
    .carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.jumbotron {
  position: absolute;
  top:100px;
  left: 20px;
  background-color: rgba(255,255,255,0.5)!important;
  width: 500px;
  height: 300px;
  }
  .space
  {
    height: 50px
  }
  </style>

</head>
<body>
<?php include ("actions/checklogin.php"); 
  include ('actions/create.php');
  include ('actions/update.php');
  include ('actions/delete.php');?>
<div class="container">