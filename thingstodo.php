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
        </h4><p><b><?php echo $row["things_type"]; ?></b></p>
        <p class="card-text"><?php echo $row["things_desc"]; ?></p>
        <form class="mb-1" id="single" action='home.php' method='get' >
          <button name="like" value="<?php echo $row["things_id"]; ?>" class="btn  btn-primary "><i class="fa fa-thumbs-up"></i> <?php echo $row["things_like"]; ?></button>
        </form>
        <form id="single" action='single-things.php' method='get' >
          <button class="btn btn-info btn-block " type="submit" name='id' value="<?php echo $row["things_id"]; ?>">More..</button>  
        </form>
      </form>
    </div>
  </div>
</div>
<?php } ?>