<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/boot_admin/vendor/bootstrap/css/bootstrap.css">
  <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>
  <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tower Project</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><button onclick="newpage()"  class="btn btn-danger navbar-btn">New Entry</button></li>
      <li><a href="show_1.php"><button onclick="viewpage()" class="btn btn-danger navbar-btn" >&nbsp&nbsp&nbsp View &nbsp&nbsp&nbsp   </button></a></li>
      <li><a href="search_1.php"><button  class="btn btn-danger navbar-btn">&nbsp&nbsp&nbsp Filter &nbsp&nbsp&nbsp </button></a></li>
      <li><a href="#"><button onclick="editpage()" class="btn btn-danger navbar-btn">&nbsp&nbsp&nbsp Edit &nbsp&nbsp&nbsp   </button></a></li>
      <li><a href="#"><button class="btn btn-danger navbar-btn">DashBoard </button></a></li>
    </ul>
  </div>
</nav>



<form action="" method="POST" name="form1" id="myform" >

<div class="subtop">
				<div class="col-xs-1" align="left">
				<a href="/reviewpage.html">HOME</a>
				</div>
</div>

WorkOrder Number:<input type="text" name="search_wo" id="searchbtn"/>
<input type="submit"  value="Search.." name="search"  class="btn btn-primary"/></div> </div>
<hr>

 <!-- Site Name -->
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Site Name</a>
        </h4>
      </div>
      <span id="collapse1"  class="panel-collapse collapse">
       <input type="text" name="sitename" id="searchbtn" size="50"/>
        </div>
      </div>
    </div>
  </div>
</div>

 <!-- Site Address -->
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2">Site details</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
				<div>
				<fieldset id="group"><label class="Gtext">State:<input type="text" name="state"/><label>
				<label class="Gtext">Dist:<input type="text" name="dist"/></label>
				</div>
				<label class="Gtext">TQ:<input type="text" name="code"/></label>
				<label class="Gtext">GPS-coordinate:<input type="text" name="gps1"/></label>
				<input type="text" name="gps2"/></fieldset>
		</div>
      </div>
    </div>
  </div>
</div>

<!-- Type Of Tower -->
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse3">Type Of Tower</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
	  
	  <input type="text" name="towertype"/>
	  
         </div>
      </div>
    </div>
  </div>
</div>


<!-- Height Of Tower -->
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse4">Height Of Tower</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
		<input type="text" name="hight_tower"/>	  
         </div>
      </div>
    </div>
  </div>
</div>


<!-- Client Details -->
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse5">Client details</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
			<fieldset id="group"> <label class="Gtext">Name:
			<input type="text" name="cust_name"/>
			Type:<input type="text" name="cust_type">
			<input type="text" name="ContactPerson" placeholder="Contact Person name"/>
			<input type="text" name="Cell-No" placeholder="Cell number"/>
			<span id="errorname2" style="color:red"></span>
			</fieldset>
	  
         </div>
      </div>
    </div>
  </div>
</div>


<!-- Employee Details -->
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse6">Employee details</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
			<fieldset id="group"><label class="Gtext">Engineer Name:<input type="text" name="eng_name"/></label>
			<label class="Gtext"> No:<input type="text" name="eng_no"/><span id="errorname6" style="color:red"></span></label>
			</fieldset>
	  
         </div>
      </div>
    </div>
  </div>
</div>


<!-- Boom Orientation -->
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse9">Boom Orientation</a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
	  
	  <input type="text" name="boom" />
	  
         </div>
      </div>
    </div>
  </div>
</div>

<!-- Sub-Contrator Details -->
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse15">Sub-Contrator details</a>
        </h4>
      </div>
      <div id="collapse15" class="panel-collapse collapse">
			<fieldset id="group"><label class="Gtext">Sub-Contrator Name:<input type="text" name="subname"/></label>
			<label class="Gtext">Sub-Order No:<input type="text" name="subno"/><span id="errorname6" style="color:red"></span></label>
			</fieldset>
	  
         </div>
      </div>
    </div>
  </div>
</div>




   
<tr><td align="left"><input type="submit" value="Update.." name="submit" class="button" id="sub"/></td>
<td align="left"><input type="submit" value="Delete.." name="delete" class="button" id="sub" onclick="return delete_func()"/></td></tr>
  
 
 
 <script>
	function newpage(){
	console.log("function working");
	document.getElementById("bottom").innerHTML='<object type="type/html" data="FormHTML.php" width="100%" height="800"></object>';
	}
function search(){
	var x=document.getElementById("searchbtn").value;
	console.log(x);
	}
	
	function viewpage(){
	console.log("function working");
	document.getElementById("bottom").innerHTML='<object type="type/html" data="show.php" width="100%" height="800"></object>';
	}
	
	function editpage(){
	console.log("function working");
	document.getElementById("bottom").innerHTML='<object type="type/html" data="edit.php" width="100%" height="800"></object>';
	}
function delete_func(){	
	var r=confirm('Are you Sure want to Delete Records!...');
	if(r == true){
	var x = prompt("Please Enter password,to Delete Records");
	if(x=="1234"){return true;}
	else{ alert("Worng password");return false;}
		}
	else {return false;}
}
</script>
 
<?php
if (isset($_POST['search'])){
$OrderNo=$_POST['search_wo'];

if(empty($OrderNo)){}
else{
$conn =mysqli_connect("localhost", "root", "","tower_project");
$sql="SELECT * FROM `first` WHERE first.WorkOrderNo=$OrderNo";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	while($row=mysqli_fetch_array($qry)){
		$site_n=$row['SiteName'];
		echo "<script>document.forms['form1']['sitename'].value='$site_n'</script>";
		$state_n=$row['State'];
		echo "<script>document.forms['form1']['state'].value='$state_n'</script>";
		$dist_n=$row['Dist'];
		echo "<script>document.forms['form1']['dist'].value='$dist_n'</script>";
		$tq_n=$row['TQ'];
		echo "<script>document.forms['form1']['code'].value='$tq_n'</script>";
		$gps_n1=$row['GPS1'];
		echo "<script>document.forms['form1']['gps1'].value='$gps_n1'</script>";
		$gps_n2=$row['GPS2'];
		echo "<script>document.forms['form1']['gps2'].value='$gps_n2'</script>";
		$boom_n2=$row['Bhoom_Oreintation'];
		echo "<script>document.forms['form1']['boom'].value='$boom_n2'</script>";
		$ttype_n=$row['TypeOfTower'];
		echo "<script>document.forms['form1']['towertype'].value='$ttype_n'</script>";
		$thight_n=$row['heightOfTower'];
		echo "<script>document.forms['form1']['hight_tower'].value='$thight_n'</script>";
		$custname_n=$row['cust_name'];
		echo "<script>document.forms['form1']['cust_name'].value='$custname_n'</script>";
		$custtype_n=$row['cust_type'];
		echo "<script>document.forms['form1']['cust_type'].value='$custtype_n'</script>";
		$engname_n=$row['EngineerName'];
		echo "<script>document.forms['form1']['eng_name'].value='$engname_n'</script>";
		$engno_n=$row['EngineerNo'];
		echo "<script>document.forms['form1']['eng_no'].value='$engno_n'</script>";
		$contactperson=$row['Contact_Person'];
		echo "<script>document.forms['form1']['ContactPerson'].value='$contactperson'</script>";
		$cellnum=$row['Cell_Number'];
		echo "<script>document.forms['form1']['Cell-No'].value='$cellnum'</script>";
		$tabId=$row['id'];
	//echo "<script>document.forms['form1']['tabId'].value='$tabId'</script>";
	}
	$sql2="SELECT * FROM subcontractor WHERE OrderNo='$OrderNo'";
$qry2=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
	$row1=mysqli_fetch_array($qry2);
	$subname=$row1['SubContractor_name'];
	$subno=$row1['SubOrderNO'];
	echo "<script>document.forms['form1']['subname'].value='$subname'</script>";
	echo "<script>document.forms['form1']['subno'].value='$subno'</script>";
}
}

if(isset($_POST['submit'])){
	$va_id=$_POST['tabId'];
	$va_order=$_POST['search_wo'];
	$va_stiname=$_POST['sitename'];
	$va_state=$_POST['state'];
	$va_dist=$_POST['dist'];
	$va_tq=$_POST['code'];
	$va_gps1=$_POST['gps1'];
	$va_gps2=$_POST['gps2'];
	$va_ttype=$_POST['towertype'];
	$va_thight=$_POST['hight_tower'];
	$va_custname=$_POST['cust_name'];
	$va_custtype=$_POST['cust_type'];
	$va_personname=$_POST['ContactPerson'];
	$va_cellnum=$_POST['Cell-No'];
	$va_engname=$_POST['eng_name'];
	$va_engno=$_POST['eng_no'];
	if($va_id==null){echo "<script>alert('please search Records to be updated!!');</script>";}
	else{
$conn =mysqli_connect("localhost", "root","","tower_project");
$sql="UPDATE `first` SET SiteName='$va_stiname',State='$va_state',Dist='$va_dist',TQ='$va_tq',
GPS1='$va_gps1',GPS2='$va_gps2',TypeOfTower='$va_ttype',heightOfTower='$va_thight',cust_name='$va_custname',
cust_type='$va_custtype',Contact_Person='$va_personname',Cell_Number='$va_cellnum',EngineerName='$va_engname',EngineerNo='$va_engno'
WHERE id=$va_id ";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
echo "<script>alert('Records sucessfully updated');</script>";
	}
}

if(isset($_POST['delete'])){
	$va_id=$_POST['tabId'];
	if($va_id==null){echo "<script>alert('please search Records to be Deleted!!');</script>";}
	else{
$conn =mysqli_connect("localhost", "root", "","tower_project");
$sql="DELETE FROM `first` WHERE id=$va_id";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
echo "<script>alert('Records deleted sucessfully');</script>";
	}
}


?>
</body>
</html>
	