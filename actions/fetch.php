<?php
include ("connection.php");
$new = new DBConnection();
$new->makeConn();

$output='';
$sql= "SELECT 
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
INNER JOIN restaurant ON restaurant.fk_location=location.location_id
WHERE restaurant_name LIKE '%".$_POST["search"]."%'";
$result=mysqli_query($conn,$sql);
$output='';
if (mysqli_num_rows($result)>0)
{
$output.=" <h4> Search Result</h4>";
$output.="<table class='table table-bordered'>
            <div class='table-responsive'>
                <tr>
                  <th>title</th>
                  <th>date</th>
                  <th>available</th>
                </tr>";
            while ($row=mysqli_fetch_array($result))
             {
              $output="
<div class='col-lg-3 col-md-4 col-sm-6 portfolio-item restaurant mb-4'>
    <div class='card h-100'>
      <a href='#'><img class='card-img-top' src='".$row['img']."' alt='img'></a>
      <div class='card-body'>
        <h4 class='card-title'>
          <a href='#'>".$row['restaurant_name']."</a>
        </h4>
        <p><b>".$row['restaurant_type']." restaurant</b></p>
        <p><a>Posted: ".$row['restaurant_post']." </a></p>
        <form class='mb-1' id='single' action='home.php' method='get' >
          <button name='like' value='".$row['restaurant_id']."' class='btn  btn-primary '><i class='fa fa-thumbs-up'></i> ".$row['restaurant_like']."</button>
        </form>
        <form id='single' action='single_restaurant.php' method='get' >
          <button class='btn btn-info btn-block ' type='submit' name='idr' value='".$row['restaurant_id']."'>More..</button>  
        </form>
      </form>
    </div>
  </div>
</div>"; }
            echo $output;
}
  else
  {
echo " ";
  }
 //SEARCH THINGS TO DO
$output2='';
$sql2= "SELECT 
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
INNER JOIN things_to_do ON things_to_do.fk_location=location.location_id
WHERE things_name LIKE '%".$_POST["search"]."%'";
$result2=mysqli_query($conn,$sql2);
$output2='';
if (mysqli_num_rows($result2)>0)
{
$output2.=" <h4> Search Result</h4>";
$output2.="<table class='table table-bordered'>
            <div class='table-responsive'>
                <tr>
                  <th>title</th>
                  <th>date</th>
                  <th>available</th>
                </tr>";
            while ($row2=mysqli_fetch_array($result2))
             {
              $output2="
<div class='col-lg-3 col-md-4 col-sm-6 portfolio-item things  mb-4'>
  <div class='card h-100'>
      <a href='#'><img class='card-img-top' src='".$row2['img']."' alt='img'></a>
      <div class='card-body'>
        <h4 class='card-title'>
          <a href='#'>".$row2['things_name']."</a>
        </h4><p><b>Posted: ".$row2['things_post']."</b></p>
        <form class='mb-1' id='single' action='home.php' method='get' >
          <button name='like' value='".$row2['things_id']."' class='btn  btn-primary '><i class='fa fa-thumbs-up'></i> ".$row2['things_like']."</button>
        </form>
        <form id='single' action='single_things.php' method='get' >
          <button class='btn btn-info btn-block ' type='submit' name='idt' value='".$row2['things_id']."'>More..</button>  
        </form>
      </form>
    </div>
  </div>
</div>";
            }
            echo $output2;
}
  else
  {
echo " ";
  }
 //SEARCH CONCERTS
$output3='';
$sql3= "SELECT 
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
INNER JOIN concert ON concert.fk_location=location.location_id
WHERE concert_name LIKE '%".$_POST["search"]."%'";
$result3=mysqli_query($conn,$sql3);
$output3='';
if (mysqli_num_rows($result3)>0)
{
$output3.=" <h4> Search Result</h4>";
$output3.="<table class='table table-bordered'>
            <div class='table-responsive'>
                <tr>
                  <th>title</th>
                  <th>date</th>
                  <th>available</th>
                </tr>";
            while ($row3=mysqli_fetch_array($result3))
             {
              $output3="
<div class='col-lg-3 col-md-4 col-sm-6 portfolio-item concert  mb-4'>
    <div class='card h-100'>
      <a href='#'><img class='card-img-top' src='".$row3['img']."' alt='img'></a>
      <div class='card-body'>
        <h4 class='card-title'> 
          <a href='#'>".$row3['concert_name']."</a>
        </h4><p><b>concert</b></p>
        <p class='card-text'>Posted: ".$row3['concert_post']."</p>
        <form class='mb-1' id='single' action='home.php' method='get' >
          <button name='like' value='".$row3['concert_id']."' class='btn  btn-primary '><i class='fa fa-thumbs-up'></i> ".$row3['concert_like']."</button>
        </form>
        <form id='single' action='single_concert.php' method='get' >
          <button class='btn btn-info btn-block ' type='submit' name='idc' value='".$row3['concert_id']."'>More..</button>  
        </form>
      </form>
    </div>
  </div>
</div>";}
            echo $output3;
}
  else
  {
echo " ";
  }
 ?>
