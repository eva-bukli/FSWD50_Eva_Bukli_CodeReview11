<?php include ("header.php");?> 
 <br><br>
<div class="container">
  <div class="row justify-content-md-center">
<?php 
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  $rows = $result->fetch_all(MYSQLI_ASSOC);
  foreach ($rows as $row) { ?>
    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item ">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><?php echo $row["userId"].": ".$row["userName"]; ?></a>
          </h4><p><?php echo $row["userRole"]; ?></p>
          <p><b><?php echo $row["userEmail"]; ?></b></p>
          <form id="single" action='users.php' method='get' >
            <button class="btn btn-danger" type="submit" name='deleteuser' value="<?php echo $row["userId"]; ?>" >Delete User</button>
            <button class="btn btn-warning" type="submit" name='upgradeuser' value="<?php echo $row["userId"]; ?>" >Make Admin</button>
            <button class="btn btn-warning" type="submit" name='upgradeuser2' value="<?php echo $row["userId"]; ?>" >Make User</button>
           </form>
           </div>
      </div>
      </div><?php } ?>
 </div>
</div>
</div>
<?php  include ("footer.php");?>