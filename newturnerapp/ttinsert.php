<?php
//insert.php;
if(isset($_POST["first_name"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=turner", "root", "");
 $order_id = uniqid();
 for($count = 0; $count < count($_POST["first_name"]); $count++)
 {  
  $query = "INSERT INTO timetracker 
  (order_id, first_name, last_name, activity, site_location, dates, hour, minute) 
  VALUES (:order_id, :first_name, :last_name, :activity, :site_location, :dates, :hour, :minute)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':order_id'   => $order_id,
    ':first_name'  => $_POST["first_name"][$count], 
    ':last_name' => $_POST["last_name"][$count], 
    ':activity'  => $_POST["activity"][$count],
    ':site_location'  => $_POST["site_location"][$count],
    ':dates'  => $_POST["dates"][$count],
    ':hour'  => $_POST["hour"][$count],
    ':minute' => $_POST["minute"][$count]
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