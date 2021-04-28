<?php

/* $connect = mysqli_connect("localhost", "root", "", "turner");
$sql="SELECT * FROM timetracker";
$query=mysqli_query($connect,$sql);    
$num=mysqli_num_fields($query);
print_r($num); */

$connect = mysqli_connect("localhost", "root", "", "turner");
$sql = "SELECT * FROM timetracker";  
$result = mysqli_query($connect, $sql);


/* $connect = mysqli_connect("localhost", "root", "", "turner");
$sql = "SELECT * FROM time_tracker_activity_select_box";  
$result = mysqli_query($connect, $sql); */

// Declaring Arrays
// $selections = array();

// Fetching Data
/* while($row = mysqli_fetch_array($result)) {
$selections[] = $row['unit_name'];
}
print_r(count($selections)); */

// Declaring Arrays
$first_name = array();
$activity = array();
$hour = array();
$data = array();

// $activity_list = array("Meeting", "Training", "Commuting", "Planning", "Misc/Other");

// Fetching Data
   while($row = mysqli_fetch_array($result)) {
   $first_name[] = $row['first_name'];
   $activity[] = $row['activity'];
   $hour[] = $row['hour'];
   $data[] = $first_name;
   $data[] = $activity;
   $data[] = $hour;
   //echo $row['activity'];
   //echo $row['start_time'];
   //echo $row['end_time'];
}
/* $data['first_name'] = $first_name;
$data['activity'] = $activity;
$data['hour'] = $hour; */

//echo json_encode($first_name[0]);
/* echo json_encode($data['first_name']);
echo json_encode($data['activity']);
echo json_encode($data['hour']); */
//echo json_encode($data);
// Setting a Count Variable for Later Use

?>
<!-------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>

<body>

<script>

window.onload = function () 

{

var chart = new CanvasJS.Chart

("chartContainer", 


			{
				animationEnabled: true,
				title:
				{
					text: "Employee Monthly Activity Hours"
				},	
				axisY: 
				{
					title: "Hours",
					titleFontColor: "#4F81BC",
					lineColor: "#4F81BC",
					labelFontColor: "#4F81BC",
					tickColor: "#4F81BC"
				},	
				toolTip: 
				{
					shared: true
				},
				legend: 
				{
					cursor:"pointer",
					itemclick: toggleDataSeries
				},
				data: 
				[


					{
						type: "column",
						name: "Bob",
						legendText: "Bob",
						showInLegend: true, 
						dataPoints:
							[
								{ label: "Meetng", y: 30 },
								{ label: "Supervise", y: 38 },
								{ label: "Travel", y: 15 },
								{ label: "Planning", y: 24 },
								{ label: "Other", y: 10 }
							]
					},
						
					{
						type: "column",	
						name: "Sam",
						legendText: "Sam",
						showInLegend: true,
						dataPoints:
						[
							{ label: "Meeting", y: 10 },
							{ label: "Supervise", y: 7 },
							{ label: "Travel", y: 39 },
							{ label: "Planning", y: 4},
							{ label: "Other", y: 29}
						]
					},

					{
						type: "column",
						name: "Meghan",
						legendText: "Meghan",
						showInLegend: true, 
						dataPoints:
							[
								{ label: "Meetng", y: 3 },
								{ label: "Supervise", y: 18 },
								{ label: "Travel", y: 25 },
								{ label: "Planning", y: 14 },
								{ label: "Other", y: 40 }
							]
					},
						
					{
						type: "column",	
						name: "Kimberly",
						legendText: "Kimberly",
						showInLegend: true,
						dataPoints:
						[
							{ label: "Meeting", y: 20 },
							{ label: "Supervise", y: 27 },
							{ label: "Travel", y: 9 },
							{ label: "Planning", y: 34},
							{ label: "Other", y: 19}
						]
					}
				]

			}


);


chart.render();

function toggleDataSeries(e) 
{
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>


			<div id="chartContainer" style="height: 370px; width: 100%;"></div>
			<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    		<!-- RETURN BACK TO TIME TRACKER Button (BELOW)-->
    		<div align="center">
				<button id="myButton" class="btn btn-info" class="float-left submit-button" >Back to Time Tracker</button>
				<script type="text/javascript">
					document.getElementById("myButton").onclick = function () 
					{
						location.href = "http://localhost/newturnerapp/ttindex.php";
					};
				</script>
    		</div>

    
</body>

</html>