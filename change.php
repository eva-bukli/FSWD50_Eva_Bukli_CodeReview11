<?php
include ("header.php");
?>
<div class="container">
  <div class="row justify-content-md-center">
    <br><br>
    <div class="col-lg-12 mt-4 mb-4">
     <form class="" action="change.php" method="POST"><h2>Edit Location</h2>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select</label>
        <select name="location_id" class="form-control" id="exampleFormControlSelect1">
          <?php 
          $sql = "SELECT * FROM location";
          $result = mysqli_query($conn, $sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);
          foreach ($rows as $row) { 
            ?>
            <option value=" <?php echo $row["location_id"]; ?> "><?php echo $row["location_id"]." - ".$row["city"]; ?></option><?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">City</label>
          <input type="text"  name="city" class="form-control" id="exampleFormControlInput1" placeholder="new city">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">ZIP</label>
          <input type="number"  name="zip" class="form-control" id="exampleFormControlInput1" placeholder="zip">
        </div>
       <div class="form-group">
          <label for="exampleFormControlInput1">Address</label>
          <input type="text"  name="address" class="form-control" id="exampleFormControlInput1" placeholder="new address">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Image URL</label>
          <input  type="text" name="img" class="form-control" id="exampleFormControlInput1" placeholder="new URL">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Web address</label>
          <input   type="text" name="web" class="form-control" id="exampleFormControlInput1" placeholder="web address">
        </div>
        
        <input class="btn btn-warning"" type="submit" value="Update" name="update" />
      </form>
      <br>
      <form class="" action="change.php" method="POST"><h2>Delete Location</h2>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select</label>
          <select name="delete" class="form-control" id="exampleFormControlSelect1">
            <?php 
            foreach ($rows as $row) { 
              ?>
              <option value=" <?php echo $row["location_id"]; ?> "><?php echo $row["location_id"]." ".$row["city"]; ?></option><?php } ?>
            </select>
          </div>
          <input class="btn btn-danger"  type="submit" value="Delete" name="delete" />
        </form>
      </div><br><br>

 
    </div></div>
    <?php include ("footer.php"); ?>
