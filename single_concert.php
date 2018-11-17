<?php include ("header.php");?>  
<div class="container">
  <div class="row justify-content-md-center"><?php
  if(isset ($_GET['idc']) ){
    $concert_id = $_GET['idc'];
  }$concert_id = $_GET['idc'];
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
  location.lat,
  location.lng,
location.address, 
location.web, 
location.img 
FROM location 
INNER JOIN concert ON concert.fk_location=location.location_id
  WHERE concert_id=$concert_id ";
  $result = mysqli_query($conn, $sql);
  $rows = $result->fetch_all(MYSQLI_ASSOC);
  foreach ($rows as $row) { ?>
    <div class="col-lg-6 portfolio-item mt-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="<?php echo $row["img"]; ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><?php echo $row["concert_id"].": ".$row["concert_name"]; ?></a>
          </h4><p><b>
            <?php echo 
            $row["concert_date"]."<br>concert<br><br>"
            .$row["concert_time"]."<br>Price: "
            .$row["concert_price"]."$<br>"
            .$row["ZIP"]."<br>"
            .$row["city"]."<br><a>"
            .$row["address"]."</a><br>"
            ; ?></b></p>
            <p class="card-text"><?php echo "Description: ".$row["concert_desc"]; ?></p>
          </div>
        </div> <div id="map">maps</div>
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
