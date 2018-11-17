<?php 
$sql = "SELECT 
restaurant.restaurant_id, 
restaurant.restaurant_name, 
restaurant.tel, 
restaurant.restaurant_type, 
restaurant.restaurant_desc, 
restaurant.fk_location, 
restaurant.restaurant_post, 
restaurant.restaurant_like, 
location.location_id, 
location.city, 
location.ZIP, 
location.address, 
location.web, 
location.img 
FROM location 
INNER JOIN restaurant ON restaurant.fk_location=location.location_id";
$result = mysqli_query($conn, $sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) { ?>
  <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item restaurant mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="<?php echo $row["img"]; ?>" alt="img"></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"><?php echo $row["restaurant_name"]; ?></a>
        </h4>
        <p><b><?php echo $row["restaurant_type"]; ?> restaurant</b></p>
        <p><a>Posted: <?php echo $row["restaurant_post"]; ?> </a></p>
        <form class="mb-1" id="single" action='home.php' method='get' >
          <button name="like" value="<?php echo $row["restaurant_id"]; ?>" class="btn  btn-primary "><i class="fa fa-thumbs-up"></i> <?php echo $row["restaurant_like"]; ?></button>
        </form>
        <form id="single" action='single_restaurant.php' method='get' >
          <button class="btn btn-info btn-block " type="submit" name='idr' value="<?php echo $row["restaurant_id"]; ?>">More..</button>  
        </form><?php  
 if (1==$currentrole) { echo 
        "<form id='single' action='rupdate.php' method='get' >
            <button class='btn btn-warning' type='submit' name='editrest' value='".$row['restaurant_id']."' >Edit</button>
        </form>
        <form id='single' action='home.php' method='post' >
            <button class='btn btn-danger' type='submit' name='deleterest' value='".$row['restaurant_id']."' >Delete</button>
        </form>"; }?>
      </form>
    </div>
  </div>
</div>
<?php } ?>


