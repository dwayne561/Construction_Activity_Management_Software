<!DOCTYPE html>
<html style="background: var(--white);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - test</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=4b2abb71619613317cc018378d940809">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Calendar.css?h=ea524911d7a729d9de455f694ba30980">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css?h=b486ae8ecf6c38e7b0073c57ef30f22f">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-2.css?h=cc854edeeadd4c06dfda9f834e92e87a">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css?h=b5662e543f8e5c37da1d23ee22009b9c">
    <link rel="stylesheet" href="assets/css/Login-Box-En.css?h=2f98490675fe81362a5b1bc6d43c93bc">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css?h=933b2dba056cb7b2cb75d76a6cb546f9">
    <link rel="stylesheet" href="assets/css/Pulse-Button-on-Hover-1.css?h=cae881a0788f9ac7cdaa44d952eb0603">
    <link rel="stylesheet" href="assets/css/Pulse-Button-on-Hover.css?h=ec5e8e78418ed950ab8796ce54f9d617">
    <title>Weekly Work Plan</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="page-top">
    <!-- Start: Dark NavBar -->
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="height: auto;color: #ffffff;width: auto;background: var(--blue);margin: 9px;">
            <div class="container-fluid"><a class="navbar-brand" href="#"><i class="fa fa-globe"></i>&nbsp;Turner Construction Company</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="http://localhost/newturnerapp/Dashboard.php"><i class="fa fa-home"></i>&nbsp;Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="http://localhost/newturnerapp/ttindex.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 7H11V12H16V14H9V7Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12Z" fill="currentColor"></path>
                                </svg>&nbsp;Time Tracker</a></li>
                        <li class="nav-item"><a class="nav-link active" style="color:#ffffff;" href="http://localhost/newturnerapp/wwpindex.php"><i class="fa fa-calendar"></i>&nbsp;Weekly Work Plan</a></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="http://localhost/newturnerapp/index.php#"><i class="fa fa-sign-out"></i>&nbsp;Sign out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div><!-- End: Dark NavBar -->
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <header></header>
                <div class="container-fluid">
                    <div class="text-center d-sm-flex justify-content-between align-items-center mb-4" style="width: auto;margin: auto;text-align: center;">
                        <h1 class="text-center text-dark mb-0" style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1>
                        <h1 class="text-center text-dark mb-0" style="text-align: center;">Weekly Work Plan</h1>
                        <h1 class="text-center text-dark mb-0" style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1>
                    </div>
                    <div class="col" style="width: auto;height: auto;">
                        <br />
                        <div class="container">
                        <h3 align="center">Week of:</h3>
                        <br />
                                    <div align="center" style="padding: 5px;">
                                        <input type="date"/>
                                    </div>
                         <br />
                         <h4 align="center">Enter Item Details</h4>
                         <br />
                      <!-------------------------------------------------------            FANCY HTML FORM CODE                ---------------------------------------------------------------------->
                         <form method="post" id="insert_form">
                          <div class="table-repsonsive">
                              <span id="error"></span>
                              <table class="table table-bordered" id="item_table">
                                      <tr>
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
                                          <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
                                      </tr>
                                      <tr>
                                          <td><input type="text" name="task[]" class="form-control task" /></td>
                                          <td><input type="text" name="company[]" class="form-control company" /></td>
                                          <td><input type="text" name="person[]" class="form-control person" /></td>
                                          <td><input type="checkbox" name="Mon[]"  /></td>
                                          <td><input type="checkbox" name="Tue[]"  /></td>
                                          <td><input type="checkbox" name="Wed[]"  /></td>
                                          <td><input type="checkbox" name="Thu[]"  /></td>
                                          <td><input type="checkbox" name="Fri[]"  /></td>
                                          <td><input type="checkbox" name="Sat[]"  /></td>
                                          <td><input type="checkbox" name="Sun[]"  /></td>
                                          <td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td>
                                      </tr>
                      
                              </table>
                              <!--------------------------------------------------------        GOES TO VIEW DETAILS PAGE           ----------------------------------------------------------->
                              <div align="center">
                              <input type="submit" name="submit" class="btn btn-info" value="Insert" />
                              <button id="myButton" class="btn btn-info" class="float-left submit-button" >View Submitted Details</button>
                                  <script type="text/javascript">
                                      document.getElementById("myButton").onclick = function () 
                                      {
                                          location.href = "http://localhost/newturnerapp/wwpresults.php";
                                      };
                                  </script>
                              </div>
                          </div>
                         </form>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js?h=6d33b44a6dcb451ae1ea7efc7b5c5e30"></script>
</body>

</html>
<script>
    $(document).ready(function(){
     
     $(document).on('click', '.add', function(){
      var html = '';
      html += '<tr>';
      html += '<td><input type="checkbox" name="Mon[]" class="form-control Mon" /></td>';
      html += '<td><input type="checkbox" name="Tue[]" class="form-control Tue" /></td>';
      html += '<td><input type="checkbox" name="Wed[]" class="form-control Wed" /></td>';
      html += '<td><input type="checkbox" name="Thu[]" class="form-control Thu" /></td>';
      html += '<td><input type="checkbox" name="Fri[]" class="form-control Fri" /></td>';
      html += '<td><input type="checkbox" name="Sat[]" class="form-control Sat" /></td>';
      html += '<td><input type="checkbox" name="Sun[]" class="form-control Sun" /></td>';
      html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
      $('#item_table').append(html);
     });
     
     $(document).on('click', '.remove', function(){
      $(this).closest('tr').remove();
     });
     
     $('#insert_form').on('submit', function(event){
      event.preventDefault();
      var error = '';
    
    /*  ------------------------------------------------------         LINE 80-130 IS IF USER LEAVES A FIELD BLANK             --------------------------------------------------------- */
      $('.task').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Name at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
    
      $('.company').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Name at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
      
      $('.person').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Quantity at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
    
      $('.Mon').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Name at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
      
      $('.Tue').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Quantity at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
      $('.Wed').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Name at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
      
      $('.Thu').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Quantity at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
      $('.Fri').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Name at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
      
      $('.Sat').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Quantity at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
      $('.Sun').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Name at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });

    
      var form_data = $(this).serialize();
      if(error == '')
      {
       $.ajax({
        url:"wwpinsert.php",
        method:"POST",
        data:form_data,
        success:function(data)
        {
         if(data == 'ok')
         {
          $('#item_table').find("tr:gt(0)").remove();
          $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
         }
        }
       });
      }
      else
      {
       $('#error').html('<div class="alert alert-danger">'+error+'</div>');
      }
     });
     
    });
    </script>