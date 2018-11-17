<?php
include ("header.php");
?>
  <?php 
    if(isset($_GET['editthings'])) {
  $things_id = $_GET['editthings']; } ?>
<div class="container">
  <div class="row justify-content-md-center">
    <br><br>
    <div class="col-lg-12 mt-4 mb-4">
      <form class="" action="home.php" method="POST"> <h2>things</h2>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label><?php 
          $sql = "SELECT * FROM things_to_do WHERE things_id=$things_id;";
          $result = mysqli_query($conn, $sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);
          foreach ($rows as $row) { ?>
          <input type="text" value="<?php echo $row["things_name"]; ?>" name="name" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Type</label><?php foreach ($rows as $row) { ?>
          <input  type="text" value="<?php echo $row["things_type"]; ?>" name="type" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Description</label><?php foreach ($rows as $row) { ?>
          <input type="text" value="<?php echo $row["things_desc"]; ?>" name="desc" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Id</label><?php foreach ($rows as $row) { ?>
          <input type="number" readonly="readonly" value="<?php echo $row["things_id"]; ?>" name="id" class="form-control" id="exampleFormControlInput1" placeholder=" "><?php } ?>
        </div>
        <input class="btn btn-success"" type="submit" value="Upload" name="update3" />
      </form><br>
    </div>
    <br><br>
  </div></div>
