<?php include ("header.php");?>  
<div class="container">
  <div class="row justify-content-md-center"><?php
  if(isset ($_GET['idr']) ){
    $restaurant_id = $_GET['idr'];
  }$restaurant_id = $_GET['idr'];
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
  location.lat,
  location.lng, 
  location.img 
  FROM location 
  INNER JOIN restaurant ON restaurant.fk_location=location.location_id
  WHERE restaurant_id=$restaurant_id ";
  $result = mysqli_query($conn, $sql);
  $rows = $result->fetch_all(MYSQLI_ASSOC);
  foreach ($rows as $row) { ?>
    <div class="col-lg-6 portfolio-item mt-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="<?php echo $row["img"]; ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><?php echo $row["restaurant_id"].": ".$row["restaurant_name"]; ?></a>
          </h4><p><b>
            <?php echo 
            $row["restaurant_type"]." restaurant<br><br> Tel: "
            .$row["tel"]."<br>"
            .$row["web"]."<br>"
            .$row["ZIP"]."<br>"
            .$row["city"]."<br><a>"
            .$row["address"]."</a><br>"
            ; ?></b></p>
            <p class="card-text"><?php echo "Description: ".$row["restaurant_desc"]; ?></p>
          </div>
        </div><div id="map">maps</div>
        </div><?php }?>
      </div>
    </div><?php foreach ($rows as $row) { ?>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $row["lat"]; ?>, lng: <?php echo $row["lng"]; ?>},
          zoom: 15
        });
      }
    </script><?php } ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0D70R2l6AR0umH4lGTDmglKGlYhK1QZQ&callback=initMap"
   async defer></script>
    <?php  include ("footer.php");?>