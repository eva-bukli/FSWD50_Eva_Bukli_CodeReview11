<?php 
$sql = "SELECT 
things_to_do.things_id, 
things_to_do.things_name,
things_to_do.things_type, 
things_to_do.things_desc, 
things_to_do.fk_location, 
things_to_do.things_post, 
things_to_do.things_like, 
location.location_id, 
location.city, 
location.ZIP, 
location.address, 
location.web, 
location.img 
FROM location 
INNER JOIN things_to_do ON things_to_do.fk_location=location.location_id";
$result = mysqli_query($conn, $sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) { ?>
  <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item things">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="<?php echo $row["img"]; ?>" alt="img"></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"><?php echo $row["things_name"]; ?></a>
        </h4><p><b>Posted: <?php echo $row["things_post"]; ?></b></p>
        <form class="mb-1" id="single" action='home.php' method='get' >
          <button name="like" value="<?php echo $row["things_id"]; ?>" class="btn  btn-primary "><i class="fa fa-thumbs-up"></i> <?php echo $row["things_like"]; ?></button>
        </form>
        <form id="single" action='single_things.php' method='get' >
          <button class="btn btn-info btn-block " type="submit" name='idt' value="<?php echo $row["things_id"]; ?>">More..</button>  
        </form><?php  
 if (1==$currentrole) { echo 
        "<form id='single' action='tupdate.php' method='get' >
            <button class='btn btn-warning' type='submit' name='editthings' value='".$row['things_id']."' >Edit</button>
        </form>
        <form id='single' action='home.php' method='post' >
            <button class='btn btn-danger' type='submit' name='deletethings' value='".$row['things_id']."' >Delete</button>
        </form>"; }?>
      </form>
    </div>
  </div>
</div>
<?php } ?>