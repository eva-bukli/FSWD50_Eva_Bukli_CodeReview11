<?php
include ("connection.php");
$new = new DBConnection();
$new->makeConn();

$output='';
$sql= "SELECT * FROM restaurant WHERE restaurant_name LIKE '%".$_POST["search"]."%'";
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
              $output=$row["restaurant_name"];
            }
            echo $output;
}
  else
  {
echo "data not found";
  }
 ?>
