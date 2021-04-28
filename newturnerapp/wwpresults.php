<!----------------------- DATABASE CONNECTION (PHP) --------------------------------->
<?php
$connect = mysqli_connect("localhost", "root", "", "turner");
$sql = "SELECT * FROM wwp";  
$result = mysqli_query($connect, $sql);
?>
<!-------------------------------------------------------------------------------->

<html>  
 <head>  
  <title>Weekly Work Plan Results</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">This Week's Submitted Entries</h2><br />
    <!----------------------- WILL DISPLAY A TABLE ---------------------------------> 
    <table class="table table-bordered">
     <tr>  <!-------- TABLE HEADER -------------->
       <th>Task</th>
       <th>Company</th>
       <th>Responsible Person</th>
       <th>Mon</th>
       <th>Tue</th>
       <th>Wed</th>
       <th>Thu</th>
       <th>Fri</th>
       <th>Sat</th>
       <th>Sun</th>
    </tr>
    <!----------------------- FETCHES DATA FROM DATABASE --------------------------------->
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["task"].'</td>  
         <td>'.$row["company"].'</td>  
         <td>'.$row["person"].'</td>  
         <td>'.$row["Mon"].'</td>  
         <td>'.$row["Tue"].'</td>
         <td>'.$row["Wed"].'</td>  
         <td>'.$row["Thu"].'</td>  
         <td>'.$row["Fri"].'</td>
         <td>'.$row["Sat"].'</td>  
         <td>'.$row["Sun"].'</td> 
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <!----------------------- EXPORT AS PHP FILE --------------------------------->
    <div align="center">
    <form method="post" action="wwpexport.php">
        <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
    <!---------------------- GO BACK TO PREVIOUS PAGE -------------------------------->
    <button id="myButton" class="btn btn-info" class="float-left submit-button" >Back to WWP</button>
        <script type="text/javascript">
        document.getElementById("myButton").onclick = function () 
        {
            location.href = "http://localhost/newturnerapp/wwpindex.php";
        };
        </script>
     </div>

   </div>  
  </div>  
 </body>  
</html>