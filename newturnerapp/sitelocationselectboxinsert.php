<?php
    $conn = new PDO("mysql:host=localhost;dbname=turner", "root", "");
    $sql = 'DELETE FROM time_tracker_site_location_select_box';
    $conn->exec($sql);
?>
<?php
//insert.php;
$valuex = json_decode($_POST['data']);;
//echo $value;
print_r($valuex);
//print_r($valuex[4]);
print_r(count($valuex));
/* foreach($valuex as $key=>$value) {
  echo 'index is '.$key[2].' and value is '.$value[6];
} */

if(isset($_POST["data"]))
{
  if ($valuex == (NULL))
  {
    $valuex = [];
    $valuex[] = 0;
  }
 $connect = new PDO("mysql:host=localhost;dbname=turner", "root", "");
 $result = [];

 for($count = 0; $count < count($valuex); $count++)
 {
  $unit_id = rand();

  $query = "INSERT INTO time_tracker_site_location_select_box
  (unit_id, unit_name) 
  VALUES (:unit_id, :unit_name)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':unit_id'   => $unit_id,
    ':unit_name'  => $valuex[$count]
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>

