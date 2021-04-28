<form method="GET">
  <input type="text" name="someName">
  //The Name Attribute will be put into the _GET inside of php 
  <input type="submit" value="Submit">
 </form>
  
<?php
$var = $_GET("someName");
echo ($var);
?>