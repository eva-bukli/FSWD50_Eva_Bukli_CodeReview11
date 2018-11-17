<?php
include ("header.php");
?>
  <?php 
    if(isset($_GET['editcon'])) {
  $concert_id = $_GET['editcon']; } ?>
<div class="container">
  <div class="row justify-content-md-center">
    <br><br>
    <div class="col-lg-12 mt-4 mb-4">
      <form class="" action="home.php" method="POST"> <h2>Concert</h2>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label><?php 
          $sql = "SELECT * FROM concert WHERE concert_id=$concert_id;";
          $result = mysqli_query($conn, $sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);
          foreach ($rows as $row) { ?>
          <input type="text" value="<?php echo $row["concert_name"]; ?>" name="name" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Description</label><?php foreach ($rows as $row) { ?>
          <input type="text" value="<?php echo $row["concert_desc"]; ?>" name="desc" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Date</label><?php foreach ($rows as $row) { ?>
          <input  type="date" value="<?php echo $row["concert_date"]; ?>" name="date" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Time</label><?php foreach ($rows as $row) { ?>
          <input  type="time" value="<?php echo $row["concert_time"]; ?>" name="time" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Price</label><?php foreach ($rows as $row) { ?>
          <input  type="number" value="<?php echo $row["concert_price"]; ?>" name="price" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Id</label><?php foreach ($rows as $row) { ?>
          <input type="number" readonly="readonly" value="<?php echo $row["concert_id"]; ?>" name="id" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <input class="btn btn-success"" type="submit" value="Upload" name="update4" />
      </form><br>
    </div>
    <br><br>
  </div></div>
