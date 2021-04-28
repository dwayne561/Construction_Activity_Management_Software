<!--------------------------- THIS PAGE WILL BE REFERENCE TO EXPORT FILE AS PHP ------------------------------------------------------------->
<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "turner");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM wwp";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
   <tr>  
        <th>Task</th>
        <th>Company</th>
        <th>Responsible Person</th>
        <th>Starts Date</th>
        <th>End Date</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
        <td>'.$row["task"].'</td>  
        <td>'.$row["company"].'</td>  
        <td>'.$row["person"].'</td>  
        <td>'.$row["starts_date"].'</td>  
        <td>'.$row["end_date"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Weekly-Work-Plan.xls');
  echo $output;
 }
}
?>