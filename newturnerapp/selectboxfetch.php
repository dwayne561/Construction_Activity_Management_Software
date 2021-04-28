<?php
$connect = mysqli_connect("localhost", "root", "", "turner");
$sql = "SELECT * FROM time_tracker_activity_select_box2";  
$result = mysqli_query($connect, $sql);

// Declaring Arrays
$selections = array();


// Fetching Data
   while($row = mysqli_fetch_array($result)) {
   $selections[] = $row['unit_name'];

}
print_r($selections);
?>