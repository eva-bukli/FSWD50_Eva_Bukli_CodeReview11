<?php
ob_start();
session_start(); // start a new session or continues the previous
include_once 'connection.php';
?>
<?php
// this will avoid mysql_connect() deprecation error.

?>

<?php
if( isset($_SESSION['user'])!="" ){
 header("Location: home.php"); // redirects to home.php
}

$error = false;
if ( isset($_POST['btn-signup']) ) {
 // sanitize user input to prevent sql injection
 $name = trim($_POST['name']);
  //trim - strips whitespace (or other characters) from the beginning and end of a string
 $name = strip_tags($name);
  // strip_tags — strips HTML and PHP tags from a string
 $name = htmlspecialchars($name);
 // htmlspecialchars converts special characters to HTML entities
 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);
 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 // basic name validation
 if (empty($name)) {
  $error = true;
  $nameError = "Please enter your full name.";
} else if (strlen($name) < 3) {
  $error = true;
  $nameError = "Name must have at least 3 characters.";
} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
  $error = true;
  $nameError = "Name must contain alphabets and space.";
}
 //basic email validation
if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
} else {
  // checks whether the email exists or not
  $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if($count!=0){
   $error = true;
   $emailError = "Provided Email is already in use.";
 }
}
 // password validation
if (empty($pass)){
  $error = true;
  $passError = "Please enter password.";
} else if(strlen($pass) < 6) {
  $error = true;
  $passError = "Password must have atleast 6 characters.";
}
 // password hashing for security
$password = hash('sha256', $pass);
 // if there's no error, continue to signup
if( !$error ) {

  $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
  $res = mysqli_query($conn, $query);

  if ($res) {
   $errTyp = "success";
   $errMSG = "Successfully registered, you may login now";
   unset($name);
   unset($email);
   unset($pass);
 } else {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later...";
 }
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Travel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/4-col-portfolio.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <style>
  html {
    height: 100%;
    box-sizing: border-box;
  }

  *,
  *:before,
  *:after {
    box-sizing: inherit;
  }

  body {
    position: relative;
    margin: 0;
    padding-bottom: 7rem;
    min-height: 100%;
    
  }
  footer {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    text-align: center;
  }
</style>
</head>

<body>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home.php">Travel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">


          <li class="nav-item">
            <a class="nav-link" href="../index.php">Sign In</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
   <form class="mt-4"method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    <h2>Sign Up:</h2>
    <hr />
    <?php
    if ( isset($errMSG) ) {
     ?>
     <div class="alert alert-<?php echo $errTyp ?>">
      <?php echo $errMSG; ?>
    </div>
    <?php
  }
  ?>
  <input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
  <span class="text-danger"><?php echo $nameError; ?></span><br>
  <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
  <span class="text-danger"><?php echo $emailError; ?></span><br>
  <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
  <span class="text-danger"><?php echo $passError; ?></span>
  <hr />
  <button type="submit" class="btn btn-success btn-block" name="btn-signup">Sign Up</button>
  <hr /><p>Do you have an account already? Then sign in here:</p>
  <a class="btn btn-info btn-block"  href="../index.php">Sign In</a>

</form>
<?php
include ("../footer.php");
?>
<?php ob_end_flush(); ?>