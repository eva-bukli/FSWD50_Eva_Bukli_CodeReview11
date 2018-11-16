<?php
include ("header.php");
include ("actions/connection.php");
?>
<div class="container">
  <div class="row justify-content-md-center">
    <br><br>
    <div class="col-lg-12 mt-4 mb-4">
      <form class="" action="r2create.php" method="POST"> <h2>Location</h2>
        <div class="form-group">
          <label for="exampleFormControlInput1">City</label>
          <input type="text" name="city" class="form-control" id="exampleFormControlInput1" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">ZIP</label>
          <input type="number" name="zip" class="form-control" id="exampleFormControlInput1" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Address</label>
          <input  type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Web address</label>
          <input type="text" name="web" class="form-control" id="exampleFormControlInput1" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Image URL</label>
          <input type="text" name="img" class="form-control" id="exampleFormControlInput1" placeholder=" ">
        </div>
        <input class="btn btn-success"" type="submit" value="Next" name="uploadl" />
      </form><br>
    </div>
    <br><br>
  </div></div>
<?php include ("footer.php"); ?>