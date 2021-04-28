<?php
//insert.php;

if(isset($_POST["task"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=turner", "root", "");
 $order_id = uniqid();
 for($count = 0; $count < count($_POST["task"]); $count++)
 {  
  $query = "INSERT INTO wwp
  (order_id, task, company, person, Mon, Tue, Wed, Thu, Fri, Sat, Sun) 
  VALUES (:order_id, :task, :company, :person, :Mon, :Tue, :Wed, :Thu, :Fri, :Sat, :Sun)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':order_id'   => $order_id,
    ':task'  => $_POST["task"][$count],
    ':company'  => $_POST["company"][$count],
    ':person'  => $_POST["person"][$count],
    ':Mon'  => $_POST["Mon"][$count], 
    ':Tue' => $_POST["Tue"][$count],
    ':Wed'  => $_POST["Wed"][$count],
    ':Thu'  => $_POST["Thu"][$count],
    ':Fri'  => $_POST["Fri"][$count],
    ':Sat'  => $_POST["Sat"][$count], 
    ':Sun' => $_POST["Sun"][$count]
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