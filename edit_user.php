<?php   session_start();  ?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.top{
	background:#ecf0f1;
	height:40px;
}
.subtop{
	text-align:center;
}

</style>
</head>
<body>
  <?php
      if(!isset($_SESSION['user_use'])) // If session is not set then redirect to Login Page
       {
          header("Location:Loginpage.php"); 
       }
        //  echo $_SESSION['use'];
		//echo "<a href='logout.php'> Logout</a> ";

?>



<form action="" method="POST" name="form1" id="myform" >
<div class="top">
<div class="subtop">
				<div class="col-xs-1" align="left">
				<a href="/work_user.php">HOME</a>
				</div>
WorkOrder Number:<input type="text" class="form-control" name="search_wo" id="searchbtn"/>
<script>var orderno=localStorage.getItem('key1');
document.forms["form1"]["search_wo"].value=orderno;
localStorage.removeItem("key1");</script>
<input type="submit"  value="Search.." name="search"  class="btn btn-primary"/></div> </div>
<hr>

<table align="center" cellpadding="1" cellspacing="2" align="center">
<tr style="display:none"><td>SL.NO:</td><td><input type="text" name="tabId"/></td></tr>
<tr style="display:none"><td>WorkOrder No:</td><td><input type="text" name="orderno"/></td></tr>
<tr><td class="gtext">Site Name:</td>
<td><input type="text" name="sitename" /><span id="errorname4" style="color:red"></span></td></tr>
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
<tr><td>Boom Oreintation:</td><td><input type="text" name="oreintation"/></td></tr>
<tr><td class="gtext">Client Details:</td><td> <fieldset id="group"> <label class="Gtext">Name:
<input type="text" name="cust_name"/>
Type:<input type="text" name="cust_type">
<input type="text" name="ContactPerson" placeholder="Contact Person name"/>
<input type="text" name="Cell-No" placeholder="Cell number"/>
<span id="errorname2" style="color:red"></span>
</fieldset></td></tr>

   <tr><td class="gtext">Employee Name:</td>
   <td><fieldset id="group"><label class="Gtext">Engineer Name:<input type="text" name="eng_name"/></label>
  <label class="Gtext"> No:<input type="text" name="eng_no"/><span id="errorname6" style="color:red"></span></label>
   </fieldset></td></tr>
   <tr><td>Sub Contractor Details:<td><fieldset id="group"><input type="text" name="subname" placeholder="Sub Contractor Name"/>
   <input type="text" name="subno" placeholder="Sub OrderNo"/></fieldset></td></tr>
<tr><td align="left"><input type="submit" value="Update.." name="submit" id="submit" class="button" id="sub"/></td>
<td align="left"><input type="submit" value="Delete.." name="delete" class="button" id="sub" onclick="return delete_func()"/></td></tr>
</form>
</table>
 
 
 <script>
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
$conn =mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
	
$sql="SELECT * FROM `first` WHERE first.WorkOrderNo='$OrderNo'";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	$row=mysqli_fetch_array($qry);
		$order_no=$row['WorkOrderNo'];
		echo "<script>document.forms['form1']['orderno'].value='$order_no'</script>";
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
		echo "<script>document.forms['form1']['tabId'].value='$tabId'</script>";
		$oreintation=$row['Bhoom_Oreintation'];
		echo "<script>document.forms['form1']['oreintation'].value='$oreintation'</script>";
	
$sql2="SELECT * FROM subcontractor WHERE OrderNo='$OrderNo'";
$qry2=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
	$row1=mysqli_fetch_array($qry2);
	$subname=$row1['SubContractor_name'];
	$subno=$row1['SubOrderNO'];
	echo "<script>document.forms['form1']['subname'].value='$subname'</script>";
	echo "<script>document.forms['form1']['subno'].value='$subno'</script>";
	
	
	$Edit=$row['Editable'];
	echo $Edit;
	if($Edit==FALSE){
		echo "<script>var x = prompt('Please Enter password,to Edit these feilds');
			if(x=='1234'){document.getElementById('submit').disabled=false;
			}
			else{ 
			alert('Sorry,..You can not edit these feilds!');
			document.getElementById('submit').disabled=true;}</script>";
	}
}
}

if(isset($_POST['submit'])){
	$va_id=$_POST['tabId'];
	$va_order=$_POST['orderno'];
	$va_stiname=$_POST['sitename'];
	$va_state=$_POST['state'];
	$va_dist=$_POST['dist'];
	$va_tq=$_POST['code'];
	$va_gps1=$_POST['gps1'];
	$va_boom=$_POST['oreintation'];
	$va_gps2=$_POST['gps2'];
	$va_ttype=$_POST['towertype'];
	$va_thight=$_POST['hight_tower'];
	$va_custname=$_POST['cust_name'];
	$va_custtype=$_POST['cust_type'];
	$va_personname=$_POST['ContactPerson'];
	$va_cellnum=$_POST['Cell-No'];
	$va_engname=$_POST['eng_name'];
	$va_engno=$_POST['eng_no'];
	$va_subname=$_POST['subname'];
	$va_subno=$_POST['subno'];
	if($va_id==null){echo "<script>alert('please search Records to be updated!!');</script>";}
	else{
		$conn =mysqli_connect("localhost", "root","sai_ram321#","tower_project");
	
	echo $va_order;
$sql="UPDATE `first` SET SiteName='$va_stiname',State='$va_state',Dist='$va_dist',TQ='$va_tq',
GPS1='$va_gps1',GPS2='$va_gps2',TypeOfTower='$va_ttype',heightOfTower='$va_thight',cust_name='$va_custname',Bhoom_Oreintation='$va_boom',
cust_type='$va_custtype',Contact_Person='$va_personname',Cell_Number='$va_cellnum',EngineerName='$va_engname',EngineerNo='$va_engno'
WHERE id=$va_id ";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));

$sql1="UPDATE `subcontractor` SET SubContractor_name='$va_subname',SubOrderNO='$va_subno' WHERE OrderNo='$va_order'";
$qry=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
echo "<script>alert('Records sucessfully updated');</script>";
	}
	
}

if(isset($_POST['delete'])){
	$va_id=$_POST['tabId'];
	$va_order=$_POST['orderno'];
	if($va_id==null){echo "<script>alert('please search Records to be Deleted!!');</script>";}
	else{
$conn =mysqli_connect("localhost", "root", "","tower_project");
$sql="DELETE FROM `first` WHERE id=$va_id";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$sql1="DELETE FROM subcontractor WHERE OrderNo='$va_order'";
$qry=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
$sql2="DELETE FROM `wo_stage` WHERE wo_sno='$va_order'";
$qry=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
$sql3="DELETE FROM `add_work` WHERE add_OrderNo='$va_order'";
$qry=mysqli_query($conn,$sql3)or die(mysqli_error($conn));
echo "<script>alert('Records deleted sucessfully');</script>";
	}
}


?>
</body>
</html>
	