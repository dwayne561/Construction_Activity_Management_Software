<?php
    $connect = mysqli_connect("localhost", "root", "", "turner");
    $sql = "SELECT * FROM time_tracker_activity_select_box";  
    $result = mysqli_query($connect, $sql);

    // Declaring Arrays
    $selections = array();

    // Fetching Data
    while($row = mysqli_fetch_array($result)) {
    $selections[] = $row['unit_name'];
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>JavaScript Selected Value</title>
    <!-- <link href="css/selectbox.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/css/selectboxcss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    
    
</head>
<body>

    <div id="container">
    <div id="apple">
        <form method="post">
        <div id="orange">
            <div id="pear">
            <label class="table table-bordered" for="name">Activity Select Box</label>
                <div id ="kiwi">
                <input type="text" id="name" placeholder="Enter a selection" autocomplete="off">
                </div>
            </div>
                <div id="mango">
                <button class="btn btn-info" id="btnAdd">Add</button>
                </div>
            <div id="cherry">
            <label class="table table-bordered" for="list">Option List</label>
            <select id="list" name="list" multiple>
            </select>
            </div>
            <div id="grape">

            <button class="btn btn-info" id="btnRemove">Remove Selected Option</button>
            </div>
            </div>
        </form>
        <div id="guava">
        <button menu="submitBtn" class="submitBtn len4 btn" id="myButton" title="submit" data-code-m="sbm.submit"> Submit</button>
        </div>
        </div>
    </div>

<script>
var users = <?php echo json_encode($selections); ?>;
//alert(users);
//document.write(users);
console.log(users);
    const btnAdd = document.querySelector('#btnAdd');
    const btnRemove = document.querySelector('#btnRemove');
    const sb = document.querySelector('#list');
    const name = document.querySelector('#name');
    var myArray = users;
    console.log(myArray);
    console.log(sb);
    for (let i = 0; i < users.length; i++) {
        // create a new option
        const option = new Option(users[i]);
        sb.add(option);

        }
    btnAdd.onclick = (e) => {
        e.preventDefault();

        // validate the option
        if (name.value == '') {
            alert('Please enter the name.');
            return;
        }
        
        // create a new option
        const option = new Option(name.value, name.value);

        myArray.push(name.value);
        //document.write(myArray);
        console.log(myArray);
        
        // add it to the list
        sb.add(option, undefined);
        

        // reset the value of the input
        name.value = '';
        name.focus();
    };
    //document.write(5+6);
    //document.write(myArray);

    // remove selected option
    btnRemove.onclick = (e) => {
        e.preventDefault();

        // save the selected option
        let selected = [];

        for (let i = 0; i < sb.options.length; i++) {
            selected[i] = sb.options[i].selected;
        }
        
        // remove all selected option
        let index = sb.options.length;
        while (index--) {
            if (selected[index]) {
                sb.remove(index);
                myArray.splice(index, 1);
            }
        }
        console.log(myArray);
    };

    $(document).ready(function() {
        $('.submitBtn').on('click', function() {
            console.log("Clicked!");
            console.log(myArray);
            $.ajax({
                url: 'activityselectboxinsert.php',
                type: 'post',
                data: {"data" : JSON.stringify(myArray)},
                success: function(data) {
                    console.log(data)
                        // Do something with data that came back. 
                }
            });
            
        })
        //$('.submitBtn').click();
        //$('.submitBtn').trigger('click')
        });

        document.getElementById("myButton").onclick = function () {
        location.href = "http://localhost/newturnerapp/ttindex.php";
    };

</script>



</body>
</html>