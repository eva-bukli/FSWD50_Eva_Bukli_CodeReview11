<?php
include ("header.php");
?>
  <?php 
    if(isset($_GET['editrest'])) {
  $restaurant_id = $_GET['editrest']; } ?>
<div class="container">
  <div class="row justify-content-md-center">
    <br><br>
    <div class="col-lg-12 mt-4 mb-4">
      <form class="" action="home.php" method="POST"> <h2>Restaurant</h2>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label><?php 
          $sql = "SELECT * FROM restaurant WHERE restaurant_id=$restaurant_id;";
          $result = mysqli_query($conn, $sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);
          foreach ($rows as $row) { ?>
          <input type="text" value="<?php echo $row["restaurant_name"]; ?>" name="name" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Tel number</label><?php foreach ($rows as $row) { ?>
          <input type="number" value="<?php echo $row["tel"]; ?>" name="tel" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Type</label><?php foreach ($rows as $row) { ?>
          <input  type="text" value="<?php echo $row["restaurant_type"]; ?>" name="type" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Description</label><?php foreach ($rows as $row) { ?>
          <input type="text" value="<?php echo $row["restaurant_desc"]; ?>" name="desc" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Id</label><?php foreach ($rows as $row) { ?>
          <input type="number" readonly="readonly" value="<?php echo $row["restaurant_id"]; ?>" name="id" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <input class="btn btn-success"" type="submit" value="Upload" name="update2" />
      </form><br>
    </div>
    <br><br>
  </div></div>
