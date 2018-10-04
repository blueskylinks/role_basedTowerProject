<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="main.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
	<link 
    <!-- Bootstrap -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   <?php 
  $conn =mysqli_connect("localhost", "root", "","tower_project");
$sql="SELECT * FROM `first` ORDER BY `id` DESC LIMIT 1";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_array($qry);
$orderno=$row['WorkOrderNo'];
++$orderno;
  ?>
  <body>
  
  <form action="form.php" method="POST" onsubmit="return validateform()" name="myForm">
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