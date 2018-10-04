<?php   session_start(); 
unset($_SESSION['stage']); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>

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
	
	  <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>
  <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  </head>
   <?php
      if(!isset($_SESSION['admin_use'])) // If session is not set then redirect to Login Page
       {
          header("Location:Loginpage.php"); 
		  exit();
       }
        //  echo $_SESSION['use'];
		//echo "<a href='logout.php'> Logout</a> ";

?>

   <?php 
  $conn =mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
$sql="SELECT * FROM `first` ORDER BY `id` DESC LIMIT 1";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_array($qry);
$orderno=$row['WorkOrderNo'];
++$orderno;
  ?>
  <body>
 <nav class="navbar navbar-inverse navbar-fixed-top" style="height:20%">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="FormHTML_admin.php"><button class="btn btn-danger navbar-btn">New Entry</button></a></li>
      <li ><a href="show_admin.php"><button class="btn btn-danger navbar-btn" >&nbsp&nbsp&nbsp View &nbsp&nbsp&nbsp   </button></a></li>
      <li><a href="search_admin.php"><button class="btn btn-danger navbar-btn">&nbsp&nbsp&nbsp Filter &nbsp&nbsp&nbsp </button></a></li>
      <li><a href="edit_admin.php"><button class="btn btn-danger navbar-btn">&nbsp&nbsp&nbsp Edit &nbsp&nbsp&nbsp   </button></a></li>
	  <li><a href="lbsearch.php"><button class="btn btn-danger navbar-btn"> &nbsp Log Book &nbsp</button></a></li>	  
      <li><a href="work_admin.php"><button class="btn btn-danger navbar-btn">DashBoard </button></a></li>
    </ul>
	  <ul class="nav navbar-nav navbar-right" >
       <a class="dropdown-toggle" data-toggle="dropdown"> 
	      <li><h3 style="font-size:25px; color:white;" title="Logout"><i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>&nbsp Shri SaiRam Engineering Service </h3></li>
	   </a>
	   
	   <ul class="dropdown-menu dropdown-user">
            <li><a data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
			<li><a href="adminpage.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
			<li class="divider"></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
		
	  </ul>
  </div>
  </nav>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">USER PROFILE</h4>
        </div>
        <div class="modal-body">
          <p><?php  
		    $admin=$_SESSION['admin_use'];
			$admin_pass=$_SESSION['admin_pass'];
			
			echo "<div class='row'>ADMIN NAME:".$admin."</div>";
			//echo "<div class='row'>USER password:".$dblastname."</div>";
			echo "<div class='row'>USER CONTACT NUMBER:".$admin_pass."</div>";
			echo "<a data-toggle='collapse' href='#collapse2'>change password</a>";
		  ?>
		  <div id="collapse2" class="panel-collapse collapse">
		  <table>
			<form action="" method="POST" onsubmit="return validateform()">
				<tr><td><label>Enter new password:</label></td><td><input type="password" id="pass" name="pass"/></td></tr>
				<tr><td><label>Re-type:</label></td><td><input type="password" id="re_pass" name="re_pass"/></td></tr>
				<tr><td></td><td style="align:center"><input type="submit"   class="btn btn-default" name="sub" value="submit"/></td></tr>
			</form>
			</table>
			<?php  
			if(isset($_POST['sub'])){
			$pass=$_POST['pass'];
			$conn =mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
			$sq="UPDATE user SET ContactNumber='$pass' WHERE usertype=0";
			$qr=mysqli_query($conn,$sq)or die(mysqli_error($conn));
			}
			?>
		</div></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>  
    </div>
  </div>
  	
	
  	<div class="panel-body" style="margin-top:10%;">
	<div class="container">
	
  <form action="form_admin.php" method="POST" onsubmit="return validateform()" name="myForm">
<table align="center" cellpadding="1" cellspacing="2">
<tr><td class="gtext">Order NO:</td>
<td><input type="text" value=<?php echo $orderno;?> disabled>
<input type="text" name="orderno" value=<?php echo $orderno;?> style="display:none"/><span id="errorname" style="color:red"></span></td></tr>
<tr><td class="gtext">Site Name:</td>
<td><input type="text" name="sitename"/><span id="errorname4" style="color:red"></span></td></tr>
<tr><td class="gtext">Site Address:</td>
<td><fieldset id="group"><label class="Gtext">State:<input type="text" name="state"/><label>
<label class="Gtext">Dist:<input type="text" name="dist"/></label>
<label class="Gtext">TQ:<input type="text" name="code"/></label>
<label class="Gtext">GPS-coordinate:<input type="text" name="gps1"/></label>
<input type="text" name="gps2"/></td></tr>
<tr><td></td><td><span id="errorname1" style="color:red"></span></fieldset></td></tr>
<tr><td class="gtext">Type of Tower:</td>
<td><input type="text" name="towertype"/><span id="errorname3" style="color:red"></span></td></tr>
<tr><td class="gtext">Hight of Tower:</td>
<td><input type="text" name="hight_tower"/><span id="errorname5" style="color:red"></span>
</td></tr>
<tr><td class="gtext">Boom Oreintation:</td><td><input type="text" name="Oreintation"/></td></tr>
<tr><td class="gtext">Client Details:</td><td> <fieldset id="group"> <label class="Gtext">Name:
<input type="text" name="cust_name"/>
<input type="text" name="Contact_Person" placeholder="Contact Person name"/>
<input type="text" name="Cell-No" placeholder="Cell number"/>
<span id="errorname2" style="color:red"></span>
</fieldset></td></tr>
<tr><td class="gtext">Customer Type:</td>
<td><select name="customertype">
<option value="direct">Direct</option>
<option value="indirect">Indirect</option>
</select></td></tr>
   <tr><td class="gtext">Employee Name:</td>
   <td><fieldset id="group"><label class="Gtext">Engineer Name:<input type="text" name="eng_name"/></label>
  <label class="Gtext"> No:<input type="text" name="eng_no"/><span id="errorname6" style="color:red"></span></label>
   </fieldset></td></tr>
    <tr colspan="3" ><td class="gtext">SubContractor Details:</td><td ><fieldset id="group"  width="50%">
	<div style="float:left; width:40%; margin-left:5px;">
	YES<input type="radio" name="radio" value="YES" onclick="SunContractoDetails()"/>
   NO<input type="radio" name="radio" value="NO" onclick="hide_subContractor()"/>
  </div>
 <div style="float:right; width:40%; margin-right:40px;">
  <input type="text" name="subContractor_name" id="name" placeholder="SubContractor Name" style="display:none"/>
  <input type="text" name="sub_orderNo" id="no" placeholder="Sub Order No" style="display:none"/>
  </div>
  </fieldset>
  </td>
   </tr>
  <tr><td></td><td align="left"><input type="submit" value="send" name="submit" class="button" id="sub"/></td></tr>
</table>
  </form>
  
  </div>
  </div>
    </body>
  <script type="text/javascript">
function validateform() {
	console.log("validation is working");
    var x = document.forms["myForm"]["orderno"].value;
	var y=document.forms["myForm"]["gps1"].value;
	var Z=document.forms["myForm"]["gps2"].value;
	var a=document.forms["myForm"]["cust_name"].value;
	var e=document.forms["myForm"]["sitename"].value;
	/*var d=document.forms["myForm"]["state"].value;
	var b = document.forms["myForm"]["dist"].value;
	var c=document.forms["myForm"]["code"].value;
	var f=document.forms["myForm"]["towertype"].value;
	var g=document.forms["myForm"]["hight_tower"].value;
	var h=document.forms["myForm"]["eng_name"].value;
	var i=document.forms["myForm"]["eng_no"].value;*/
	if (x == "") {
      document.getElementById('errorname').innerText='this field required*';
        return false;
    }
	else if(e==""){
	document.getElementById("errorname4").innerText='This feild required*';
	return false;
	}
	else if (y == "" || Z=="") {
      document.getElementById('errorname1').innerText='these fields are required*';
        return false;
    }
	else if (a == "") {
      document.getElementById('errorname2').innerText='this field required*';
        return false;
    }
	/*
	else if(f==""){
	document.getElementById("errorname3").innerText='This feild required*';
	return false;
	}
	else if(g==""){
	document.getElementById("errorname5").innerText='This feild required*';
	return false;
	}
	else if(h==""|| i==""){
	document.getElementById("errorname6").innerText='This feild required*';
	return false;
	}*/
	else return true;
}


function SunContractoDetails(){
	console.log('onclick working');
	document.getElementById('name').style.display="block";
	document.getElementById('no').style.display="block";
}

function hide_subContractor(){
	document.getElementById('name').style.display="none";
	document.getElementById('no').style.display="none";
}
  </script>
  </html>