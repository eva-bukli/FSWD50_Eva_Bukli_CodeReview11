<?php include ("header.php");?>  
<div class="container">
  <div class="row justify-content-md-center"><?php
  if(isset ($_GET['idt']) ){
    $things_id = $_GET['idt'];
  }$things_id = $_GET['idt'];
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
  location.lat,
  location.lng, 
location.img 
FROM location 
INNER JOIN things_to_do ON things_to_do.fk_location=location.location_id
  WHERE things_id=$things_id ";
  $result = mysqli_query($conn, $sql);
  $rows = $result->fetch_all(MYSQLI_ASSOC);
  foreach ($rows as $row) { ?>
    <div class="col-lg-6 portfolio-item mt-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="<?php echo $row["img"]; ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><?php echo $row["things_id"].": ".$row["things_name"]; ?></a>
          </h4><p><b>
            <?php echo 
            $row["things_type"]."<br><br>"
            .$row["ZIP"]."<br>"
            .$row["city"]."<br><a>"
            .$row["address"]."</a><br>"
            ; ?></b></p>
            <p class="card-text"><?php echo "Description: ".$row["things_desc"]; ?></p>
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