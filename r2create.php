<?php
include ("header.php");
?>
<div class="container">
  <div class="row justify-content-md-center">
    <br><br>
    <div class="col-lg-12 mt-4 mb-4">
      <form class="" action="r2create.php" method="POST"> <h2>Restaurant</h2>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Tel number</label>
          <input type="number" name="tel" class="form-control" id="exampleFormControlInput1" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Type</label>
          <input  type="text" name="type" class="form-control" id="exampleFormControlInput1" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Description</label>
          <input type="text" name="desc" class="form-control" id="exampleFormControlInput1" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Location</label>
          <?php 
          $sql = "SELECT * FROM location ORDER BY location_id DESC LIMIT 1;";
          $result = mysqli_query($conn, $sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);
          foreach ($rows as $row) { 
            ?>
          <input type="text" readonly="readonly" value="<?php echo $row["location_id"]; ?>" name="loc" class="form-control" id="exampleFormControlInput1"> <?php } ?>
        </div>
        <input class="btn btn-success"" type="submit" value="Upload" name="upload2" />
      </form><br>
    </div>
    <br><br>
  </div></div>
<?php include ("footer.php"); ?>