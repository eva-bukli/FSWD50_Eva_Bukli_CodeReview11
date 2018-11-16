<?php 
$sql = "SELECT 
concert.concert_id, 
concert.concert_name,
concert.concert_desc, 
concert.fk_location, 
concert.concert_post, 
concert.concert_like,
concert.concert_price,
concert.concert_date,
concert.concert_time, 
location.location_id, 
location.city, 
location.ZIP, 
location.address, 
location.web, 
location.img 
FROM location 
INNER JOIN concert ON concert.fk_location=location.location_id";
$result = mysqli_query($conn, $sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) { ?>
  <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item concert">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="<?php echo $row["img"]; ?>" alt="img"></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"><?php echo $row["concert_name"]; ?></a>
        </h4><p><b>concert</b></p>
        <p class="card-text"><?php echo $row["concert_desc"]; ?></p>
        <form class="mb-1" id="single" action='home.php' method='get' >
          <button name="like" value="<?php echo $row["concert_id"]; ?>" class="btn  btn-primary "><i class="fa fa-thumbs-up"></i> <?php echo $row["concert_like"]; ?></button>
        </form>
        <form id="single" action='single-concert.php' method='get' >
          <button class="btn btn-info btn-block " type="submit" name='id' value="<?php echo $row["concert_id"]; ?>">More..</button>  
        </form>
      </form>
    </div>
  </div>
</div>
<?php }// loop ends ?>