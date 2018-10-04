<?php   session_start();  ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link href="/boot_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/boot_admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/boot_admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/boot_admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/boot_admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	  <!-- jQuery -->
    <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<style>
.tab_top td {
    padding-top: 15px;
}

* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #777979;
    width: 20%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: #fff;
    padding: 22px 16px;
    width: 80%;
    border: none;
    outline: none;
    text-align: center;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
/*.tab button:hover {
    background-color: #ddd;
}*/

/* Create an active/current "tab button" class */
.tab button.active {
    background-color:  #0ab7c6;
}

/* Style the tab content */
.tabcontent {
    text-align:center;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 100%;
    border-left: none;
	background: #ddd;
    height: 300px;
	margin-top:4%;
}
</style>
</head>
<body>
<div class="nav nav-pills" id="nav1" style="margin-top:2%; margin-left:5%;">
<a href="work_admin.php"><button type="button" class="btn btn-outline btn-primary">Home</button></a>
</div>

<div class="tab" style="margin-top:4%;">
   <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Add Users</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">View Users List</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Remove Users</button>
</div>

<div id="London" class="tabcontent">
<p>
<div>
  <form method="post" action="insert_admin.php" onsubmit="return validateform1()" name="form1">
  <table align="center" >
    <tr class="tab_top"><td><label>First Name:</label></td><td></td>
    <td><input type="text" value=""  name="first_name" class="input-xlarge"></td><span id="errorname1" style="color:red"></span></tr>
	<tr class="tab_top"><td><label>Last Name:</label></td><td></td>
    <td> <input type="text" value="" name="last_name" class="input-xlarge"></td><span id="errorname2" style="color:red"></span></tr>
    <tr class="tab_top"><td> <label>Email:</label></td><td></td>
    <td><input type="text" value="" name="email" class="input-xlarge"></td><span id="errorname3" style="color:red"></span></tr>
    <tr class="tab_top"><td> <label>Phone No:</label></td><td></td>
    <td><input type="text" class="input-xlarge" name="contact_no"></tr></td>
	 <tr class="tab_top"><td> <label>Set Previlagious:</label></td><td></td>
    <td>Edit:<input type="checkbox" class="input-xlarge" name="edit"></td><td>new_entry:<input type="checkbox" class="input-xlarge" name="new_entry"/></td><td>&emsp;&nbsp Logbook:<input type="checkbox" class="input-xlarge" name="logbook"></td></td></tr>
    <div>
        <tr class="tab_top"><td></td><td></td> <td> <input type="submit" value="Add" class="btn btn-success" name="add" /></td><span id="errorname4" style="color:red"></span></tr>
   </div>
	</table>
   </form>
   
   </div>
  </p>
</div>
  
<?php
$conn=mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
$sql='SELECT * FROM `user` ';
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));

?>


<?php
      if(!isset($_SESSION['admin_use'])) // If session is not set then redirect to Login Page
       {
          header("Location:Loginpage.php"); 
		  exit();
       }
        //  echo $_SESSION['use'];
		//echo "<a href='logout.php'> Logout</a> ";

?>

<div id="Paris" class="tabcontent" >
  <p>
        <div class="col-lg-12" Style="width:80%">
            <div class="panel panel-default">
                 <!-- /.panel-heading -->
                <div class="panel-body">
					
						<table  class="table table-striped table-bordered table-hover"  id="dataTables-example">
							<thead>
								<tr >
									<th>USRE NAME</th>
									<th>PASSWORD</th>
									<th>CONTACT NUMBER</th>
									<th>EMAIL</th>
								</tr>
							</thead>
							<tbody>
								<?php
									while($row=mysqli_fetch_array($qry)){
										echo "<tr><td>".$row['FirstName']."</td>";
										echo "<td>".$row['LastName']."</td>";
										echo "<td>".$row['ContactNumber']."</td>";
										echo "<td>".$row['Email']."</td>";
										echo "</tr>";
									}
								?>
                            </tbody>
                        </table>
                     <!-- /.table-responsive -->
                </div>
                        <!-- /.panel-body -->
            </div>
                    <!-- /.panel -->
        </div>
                <!-- /.col-lg-12 -->
  </p>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Remove Users</h3>
  <p><form method="post" action="insert_admin.php" onsubmit="return validateform2()" name="form2">
  <table align="center" class="tab_top">
        <tr><td><label>Username</label></td>
        <td><input type="text" value="" name="r_username" class="input-xlarge"></td><span id="errorname5" style="color:red"></span></tr>
        <tr><td><label>Phone No</label></td>
        <td><input type="text" value="" name="r_contactno" class="input-xlarge"></tr></td>
		 <tr><td></td> <td> <button  name="remove" class="btn btn-success">Remove</button></td><span id="errorname6" style="color:red"></span></tr>
	</table></form>
	</p>
</div>

   <!-- jQuery -->
    <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/boot_admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/boot_admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/boot_admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/boot_admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/boot_admin/dist/js/sb-admin-2.js"></script>
	
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

 $(document).ready(function() {
        $('#dataTables-example').DataTable({
        aLengthMenu: [
		[25, 50, 100, 200, -1],
		[25, 50, 100, 200, "5"]
		],
		iDisplayLength: -1,responsive: true,
		"aaSorting": []
        });
		
    });
	
	function validateform1() {
		console.log("validation is working");
		var x = document.forms["form1"]["first_name"].value;
		var y=document.forms["form1"]["last_name"].value;
		var z = document.forms["form1"]["email"].value;
		var p=document.forms["form1"]["contact_no"].value;
		if (x == "") {
			document.getElementById('errorname1').innerText='this field required*';
			return false;
		}
		if (y == "") {
			document.getElementById('errorname2').innerText='this field required*';
			return false;
		}
		if (z == "") {
			document.getElementById('errorname3').innerText='this field required*';
			return false;
		}
		if (p == "") {
			document.getElementById('errorname4').innerText='this field required*';
			return false;
		}
		else return true;
	}
	function validateform2() {
		console.log("validation is working");
		var x = document.forms["form2"]["r_username"].value;
		var y=document.forms["form2"]["r_contactno"].value;
		if (x == "") {
			document.getElementById('errorname5').innerText='this field required*';
			return false;
		}
		if (y == "") {
			document.getElementById('errorname6').innerText='this field required*';
			return false;
		}
		else return true;
	}
</script>
     
	 <!-- jQuery -->
    <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/boot_admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/boot_admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/boot_admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/boot_admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/boot_admin/dist/js/sb-admin-2.js"></script>
	
</body>
</html> 
