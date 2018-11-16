<?php
// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'cr11_eva_bukli_travelmatic');

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

if ( !$conn ) {
 die("Connection failed : " . mysqli_error());
}


?>
<?php  
	class DBConnection {
		public $servername ="localhost";
		public $username ="root";
		public $password ="";
		public $dbname ="cr11_eva_bukli_travelmatic";
		public function makeConn(){
			$conn= mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
		return $conn;	
		}
	};
//class to show Restaurants:
class Printing extends DBConnection {
    public function printRestaurant () {
      $result=$this->makeConn();
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
        $result2 = mysqli_query($result,$sql);
        $rows = $result2->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row) { echo "
          <div class='col-lg-3 col-md-4 col-sm-6 portfolio-item restaurant'>
            <div class='card h-100'>
              <a href='#'><img class='card-img-top' src='".$row['img']."' alt='img'></a>
              <div class='card-body'>
                <h4 class='card-title'>
                  <a href='#'>".$row['restaurant_name']."</a>
                </h4>
                <p><b>".$row['restaurant_type']." restaurant</b></p>
                <p><a>".$row['web']." </a></p>
                <p class='card-text'>".$row['restaurant_desc']."</p>
                <form class='mb-1' id='single' action='home.php' method='get' >
                  <button name='like' value='".$row['restaurant_id']."' class='btn  btn-primary '><i class='fa fa-thumbs-up'></i> ".$row['restaurant_like']."</button>
                </form>
                <form id='single' action='single-restaurant.php' method='get' >
                  <button class='btn btn-info btn-block ' type='submit' name='id' value='".$row['restaurant_id']."'>More..</button>  
                </form>
              </form>
            </div>
          </div>
        </div>
         "; }
 }
  }



?>