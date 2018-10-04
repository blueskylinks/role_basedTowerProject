<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/boot_admin/vendor/bootstrap/css/bootstrap.css">
  <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>
  <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid" >	
	<ul>
	<div class="navbar-header">
		<a class="navbar-brand" >Sri SaiRam Engineering - Tower Project</a>
		</div>
			<ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./reviewpage.html">Home<span class="sr-only"></span></a></li>
	    <li class="active"><a href="./"><span class="sr-only"></span></a></li>
          </ul>
	</ul>
        <div class="row">
            <div class="col-xs-12 ">
	    <ul class="nav navbar-nav">
	    <li><a href="show_1.php"><button id="new" name="new" value="new" class="btn btn-danger custom">New Entry</button></a></li>
            <li><a href="show_1.php"><button id="view" name="view" value="view" class="btn btn-danger  custom">View</button></a></li>
	    <li><a href="show_1.php"><button id="edit" name="edit" value="new" class="btn btn-danger custom">Edit</button></a></li>
            <li><a href="show_1.php"><button id="view" name="view" value="view" class="btn btn-danger  custom">Filter</button></a></li>
	    <li><a href="show_1.php"><button id="view" name="view" value="view" class="btn btn-danger  custom">DashBoard</button></a></li>
	    </ul>
            </div>
	</div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>


<!-- /.col-lg-6 -->
                <div class="col-lg-12" > 
				<form action="" method="POST" name="form1"  id="myform" style="margin-left:10%" >
				WorkOrder Number:<input type="text" name="search_wo" id="searchbtn"/>
<input type="submit"  value="Search.." class="subtop2" name="search"  class="btn btn-primary"  onClick="store_data()" />
</form>
				
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li ><a href="#home-pills" data-toggle="tab">General</a>
                                </li>
                                <li><a href="#profile-pills" data-toggle="tab">Nature Of Work</a>
                                </li>
                                <li><a href="#messages-pills" data-toggle="tab">Additionals</a>
                                </li>
                               
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home-pills">
									<h4>Edit Details</h4>
                                    <p > <form name="form2" action="" method="post">

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
	  
	  <input type="text" name="towertype"/>
	  
         </div>
      </div>
    </div>
  </div>




 <div  style="margin-left:20%">
 <input  type="submit" value="Update.." name="submit" class="button" id="sub"/>
<input type="submit" value="Delete.." name="delete" class="button" id="sub" onclick="return delete_func()"/>
</div>

</form>
  
 

 
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
		echo "<script>document.forms['form2']['sitename'].value='$site_n'</script>";
		$state_n=$row['State'];
		echo "<script>document.forms['form2']['state'].value='$state_n'</script>";
		$dist_n=$row['Dist'];
		echo "<script>document.forms['form2']['dist'].value='$dist_n'</script>";
		$tq_n=$row['TQ'];
		echo "<script>document.forms['form2']['code'].value='$tq_n'</script>";
		$gps_n1=$row['GPS1'];
		echo "<script>document.forms['form2']['gps1'].value='$gps_n1'</script>";
		$gps_n2=$row['GPS2'];
		echo "<script>document.forms['form2']['gps2'].value='$gps_n2'</script>";
		$ttype_n=$row['TypeOfTower'];
		echo "<script>document.forms['form2']['towertype'].value='$ttype_n'</script>";
		$thight_n=$row['heightOfTower'];
		echo "<script>document.forms['form2']['hight_tower'].value='$thight_n'</script>";
		$custname_n=$row['cust_name'];
		echo "<script>document.forms['form2']['cust_name'].value='$custname_n'</script>";
		$custtype_n=$row['cust_type'];
		echo "<script>document.forms['form2']['cust_type'].value='$custtype_n'</script>";
		$engname_n=$row['EngineerName'];
		echo "<script>document.forms['form2']['eng_name'].value='$engname_n'</script>";
		$engno_n=$row['EngineerNo'];
		echo "<script>document.forms['form2']['eng_no'].value='$engno_n'</script>";
		$contactperson=$row['Contact_Person'];
		echo "<script>document.forms['form2']['ContactPerson'].value='$contactperson'</script>";
		$cellnum=$row['Cell_Number'];
		echo "<script>document.forms['form2']['Cell-No'].value='$cellnum'</script>";
		$tabId=$row['id'];
	echo "<script>document.forms['form2']['tabId'].value='$tabId'</script>";
	}
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
</p>

	
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4>Nature Of work</h4>
                                    <p><html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/boot_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>
  <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>


<form action="" method="POST" name="form3" id="myform">

<div class="container">
<div><p></p></div>
<div>Work Order No:<input name="st_wono" id="st_wono" type="text" value="">     Customer Name:<input name="cust_n" size="50" id="cust_n" type="text" value=""disabled>
</div>
</div>

<div><p></p></div>
<div class="container">
<table width="100%" cellpadding="1" cellspacing="2" class="btn btn-outline btn-default">
	
	<tr>
		<td width="150">Stage</td>
		<td width="150">Date</td>
		<td width="150">Engineer Name</td>
		<td width="150">Comments</td>
		<td width="150">Submit</td>
	</tr>
	
	<tr>
		<td><p></p></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st1" value="Inspection"  style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d1" id="date" type="date"></td>
		<td width="150">
		<input name="st1_engname"  id="eng1" type="text"></td>
		<td width="500">
		<textarea id="des" type="text" name="st1_comment" placeholder="Enter Description" rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l1" id="st_l1" type="hidden" value="0"/>
		<input name="set_d1"  id="set_d1" type="submit" value="Update"></td>
	</tr>
	
	<tr>
		<td width="150">
		<input type="text" name="st2" value="Foundation"  style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d2" placeholder="Enter date" id="date" type="date"></td>
		<td width="150">
		<input name="st2_engname" placeholder="Enter engineer name" id="eng2" type="text"></td>
		<td width="500">
		<textarea id="des" type="text" name="st2_comment" placeholder="Enter Description" rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l2" id="st_l2" type="hidden" value="0"/>
		<input name="set_d2" placeholder="Enter date" id="set_d2" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st3" value="Errection"  style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d3" placeholder="Enter date" id="date" type="date"></td>
		<td width="150">
		<input name="st3_engname" placeholder="Enter engineer name" id="eng1" type="text"></td>
		<td width="500">
		<textarea id="des" type="text" name="st3_comment" placeholder="Enter Description" rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l3" id="st_l3" type="hidden" value="0"/>
		<input name="set_d3" placeholder="Enter date" id="set_d3" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st4" value="Commissioning"  style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d4" placeholder="Enter date" id="date" type="date"></td>
		<td width="150">
		<input name="st4_engname" placeholder="Enter engineer name" id="eng2" type="text"></td>
		<td width="500">
		<textarea id="des" type="text" name="st4_comment" placeholder="Enter Description" rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l4" id="st_l4" type="hidden" value="0"/>
		<input name="set_d4" placeholder="Enter date" id="set_d4" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st5" value="Maintenance"   style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d5" placeholder="Enter date" id="date" type="date"></td>
		<td width="150">
		<input name="st5_engname" placeholder="Enter engineer name" id="eng1" type="text"></td>
		<td width="500">
		<textarea id="des" type="text" name="st5_comment" placeholder="Enter Description" rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l5" id="st_l5" type="hidden" value="0"/>
		<input name="set_d5" placeholder="Enter date" id="set_d5" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st6" value="De-Errection"  style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d6" placeholder="Enter date" id="date" type="date"></td>
		<td width="150">
		<input name="st6_engname" placeholder="Enter engineer name" id="eng2" type="text"></td>
		<td width="500">
		<textarea id="des" type="text" name="st6_comment" placeholder="Enter Description" rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l6" id="st_l6" type="hidden" value="0"/>
		<input name="set_d6" placeholder="Enter date" id="set_d6" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st7" style="text-align:center" value="Goods" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d7" placeholder="Enter date" id="date" type="date"></td>
		<td width="150">
		<input name="st7_engname" placeholder="Enter engineer name" id="eng1" type="text"></td>
		<td width="500">
		<textarea id="des" type="text" name="st7_comment" placeholder="Enter Description" rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<!--<input name="st_l7" id="st_l7" type="hidden" value="0"/>-->
		<input name="set_d7" id="set_d7" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td><p></p></td>
	</tr>
	
	<tr>
		<td><p></p></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st8"  style="text-align:center" value="Invoice" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d8" placeholder="Enter date" id="date" type="date"></td>
		
		<input name="st8_engname" type="hidden" id="eng8" type="text"></td>
				
		<td width="150">Invoice No:</td>
	</tr>
	
	<tr>
		<td width="150">
		<hr>
		</td>
		<td width="150">
		<hr>
		</td>
		<td width="150">
		<input name="st8_comment" placeholder="Enter Invoice No here" id="com2" type="text"></td>
		<td width="150">
		<input name="st_l8" id="st_l8" type="hidden" value="0"/>
		<input name="set_d8" placeholder="Enter date" id="set_d8" type="submit" value="Update"></td>
	</tr>

</table>
</div>
</form>

 
<?php

function display_stage(){
$OrderNo=$_POST['search_wo'];
$state_n;
echo "<script>document.forms['form3']['st_wono'].value='$OrderNo'</script>";
if(empty($OrderNo)){}
else{
$conn =mysqli_connect("localhost", "root", "","tower_project");
$sql="SELECT wo_stage.wo_sno,wo_stage.st_slno, wo_stage.wo_stname,wo_stage.work_stateno, wo_stage.steng_name, wo_stage.stage_comment, work_state.state_name, wo_stage.wo_udate FROM wo_stage,work_state WHERE (wo_stage.work_stateno=work_state.wo_st) AND wo_stage.wo_sno=$OrderNo";
$sql_customer="SELECT cust_name, SiteName from first where WorkOrderNo=$OrderNo";
$sql_cust_qry=mysqli_query($conn,$sql_customer)or die(mysqli_error($conn));
$wo_slno1[]=null;
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	$i=0;
	
	while($row=mysqli_fetch_array($sql_cust_qry)){
		$cust=$row['cust_name'];
		echo "<script>document.forms['form3']['cust_n'].value='$cust'</script>";


	}
	echo "<br>";
	while($row=mysqli_fetch_array($qry)){
		$wo_date[]=$row['wo_udate']; 
		$wo_engname[]=$row['steng_name'];
		$wo_com[]=$row['stage_comment'];
		$wo_slno[]=$row['st_slno'];
		$wo_stagename[]=$row['wo_stname'];
		//$source = '2012-07-31';
		//$date = new DateTime($source);
		//echo $date->format('d.m.Y'); // 31.07.2012
		switch ($i){
		case 0: echo "<script>document.forms['form3']['st_d1'].value='$wo_date[0]'</script>";
			echo "<script>document.forms['form3']['st1_engname'].value='$wo_engname[0]'</script>";
			echo "<script>document.forms['form3']['st1_comment'].value='$wo_com[0]'</script>";
			echo "<script>document.forms['form3']['st_l1'].value='$wo_slno[0]'</script>";
			break;
		case 1: echo "<script>document.forms['form3']['st_d2'].value='$wo_date[1]'</script>";
			echo "<script>document.forms['form3']['st2_engname'].value='$wo_engname[1]'</script>";
			echo "<script>document.forms['form3']['st2_comment'].value='$wo_com[1]'</script>";
			echo "<script>document.forms['form3']['st_l2'].value='$wo_slno[1]'</script>";
			break;
		case 2: echo "<script>document.forms['form3']['st_d3'].value='$wo_date[2]'</script>";
			echo "<script>document.forms['form3']['st3_engname'].value='$wo_engname[2]'</script>";
			echo "<script>document.forms['form3']['st3_comment'].value='$wo_com[2]'</script>";
			echo "<script>document.forms['form3']['st_l3'].value='$wo_slno[2]'</script>";
			break;
		case 3: echo "<script>document.forms['form3']['st_d4'].value='$wo_date[3]'</script>";
			echo "<script>document.forms['form3']['st4_engname'].value='$wo_engname[3]'</script>";
			echo "<script>document.forms['form3']['st4_comment'].value='$wo_com[3]'</script>";
			echo "<script>document.forms['form3']['st_l4'].value='$wo_slno[3]'</script>";
			break;
		case 4: echo "<script>document.forms['form3']['st_d5'].value='$wo_date[4]'</script>";
			echo "<script>document.forms['form3']['st5_engname'].value='$wo_engname[4]'</script>";
			echo "<script>document.forms['form3']['st5_comment'].value='$wo_com[4]'</script>";
			echo "<script>document.forms['form3']['st_l5'].value='$wo_slno[4]'</script>";
			break;
		case 5: echo "<script>document.forms['form3']['st_d6'].value='$wo_date[5]'</script>";
			echo "<script>document.forms['form3']['st6_engname'].value='$wo_engname[5]'</script>";
			echo "<script>document.forms['form3']['st6_comment'].value='$wo_com[5]'</script>";
			echo "<script>document.forms['form3']['st_l6'].value='$wo_slno[5]'</script>";
			break;
		case 6: echo "<script>document.forms['form3']['st_d7'].value='$wo_date[6]'</script>";
			echo "<script>document.forms['form3']['st7_engname'].value='$wo_engname[6]'</script>";
			echo "<script>document.forms['form3']['st7_comment'].value='$wo_com[6]'</script>";
			echo "<script>document.forms['form3']['st_l7'].value='$wo_slno[6]'</script>";
			break;
		case 7: echo "<script>document.forms['form3']['st_d8'].value='$wo_date[7]'</script>";
			echo "<script>document.forms['form3']['st8_engname'].value='$wo_engname[7]'</script>";
			echo "<script>document.forms['form3']['st8_comment'].value='$wo_com[7]'</script>";
			echo "<script>document.forms['form3']['st_l8'].value='$wo_slno[7]'</script>";
			break;
		}
		if($row['wo_stname']!=""){
		$state_n=$row['wo_stname'];
		echo "<script>document.forms['form3']['stage_name'].value='$state_n'</script>";
		}
		//if($wo_stagename[$i!=""]){
		//echo "<script>document.forms['form3']['stage_name'].value='$wo_stagename[$i]'</script>";
		//}
		$i=$i+1;
	}
//echo $state_n;
echo $state_n;
$sqlu1="UPDATE first SET stage='$state_n' WHERE WorkOrderNo='$OrderNo'";
$qryu1=mysqli_query($conn,$sqlu1)or die(mysqli_error($conn));	
}
}

if (isset($_POST['search'])){
display_stage();
}



if (isset($_POST['set_d1'])){
//echo $_POST['st_l1'];
$var_no=$_POST['st_l1'];
$var_d1=$_POST['st_d1'];
$var_engname=$_POST['st1_engname'];
$var_comment=$_POST['st1_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Inspection',wo_udate='$var_d1',steng_name='$var_engname',stage_comment='$var_comment' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );

display_stage();
echo "Successfully Updated....";

}
}


if (isset($_POST['set_d2'])){
$var_no=$_POST['st_l2'];
$var_d1=$_POST['st_d2'];
$var_engname=$_POST['st2_engname'];
$var_comment=$_POST['st2_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Foundation', wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );

display_stage();
echo "Successfully Updated....";

}
} 



if (isset($_POST['set_d3'])){
$var_no=$_POST['st_l3'];
$var_d1=$_POST['st_d3'];
$var_engname=$_POST['st3_engname'];
$var_comment=$_POST['st3_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Errection',wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );

display_stage();
echo "Successfully Updated....";

}
} 


if (isset($_POST['set_d4'])){
$var_no=$_POST['st_l4'];
$var_d1=$_POST['st_d4'];
$var_engname=$_POST['st4_engname'];
$var_comment=$_POST['st4_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Commissioning', wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );

display_stage();
echo "Successfully Updated....";

}
} 

if (isset($_POST['set_d5'])){
$var_no=$_POST['st_l5'];
$var_d1=$_POST['st_d5'];
$var_engname=$_POST['st5_engname'];
$var_comment=$_POST['st5_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Maintenance', wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );

display_stage();
echo "Successfully Updated....";

}
} 
if (isset($_POST['set_d6'])){
$var_no=$_POST['st_l6'];
$var_d1=$_POST['st_d6'];
$var_engname=$_POST['st6_engname'];
$var_comment=$_POST['st6_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='De-Errection', wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );

display_stage();
echo "Successfully Updated....";

}
} 
if (isset($_POST['set_d7'])){
$var_no=$_POST['st_l7'];
$var_d1=$_POST['st_d7'];
$var_engname=$_POST['st7_engname'];
$var_comment=$_POST['st7_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Goods',wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );

display_stage();
echo "Successfully Updated....";

}
} 
if (isset($_POST['set_d8'])){
$var_no=$_POST['st_l8'];
$var_d1=$_POST['st_d8'];
$var_engname=$_POST['st8_engname'];
$var_comment=$_POST['st8_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Invoice', wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );

display_stage();
echo "Successfully Updated....";

}
} 
?>



	</p>
                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Messages Tab</h4>
                                    <p>
<form method="post" action="" name="form4" id="divright" >
<table class="tab" style="margin-left:12%">

<tr><td id="label"></td><td><input type="text" name="orderno" />
<?php

$OrderNo=$_POST['search_wo'];
echo "<script>document.forms['form4']['orderno'].value='$OrderNo'</script>";
?>
</td></tr>
<tr><td>Description:</td><td><textarea id="des" type="text" name="descript" placeholder="Enter Description" rows="2" cols="45"></textarea></td></tr>
<tr><td>Amount:</td><td><input type="text" name="amt" id="amt" placeholder="Enter Amount"/></td>
</tr>
<tr><td>Choose Stages:</td><td><select name="stage" onchange="select_stage(this)">
<option>NONE</option>
<option>Inspection</option>
<option>Foundation</option>
<option>Errection</option>
<option>Comissioning</option>
<option>Maintenance</option>
<option>De-Errection</option>
<option>Goods</option>
<option>Invoice </option>
</select></td></tr>
<tr><td></td><td align="center"><input type="submit" name="submit2" value="set" class="submit" /></td></tr>
</div>
</table>
</form>
</body>
<?php

if(isset($_POST['submit2'])){
		$order_no=$_POST['orderno'];
		echo $order_no;
		$des=$_POST['descript'];
		$amt=$_POST['amt'];
		$stage=$_POST['stage'];
		if($stage=="NONE") $Stage="";
		else $Stage=$stage;
		
		$conn = mysqli_connect("localhost", "root", "","tower_project");
		$sql="insert into add_work(add_OrderNo,stages,add_Description,add_Amount)
		values('$order_no','$Stage','$des','$amt')";
		$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
		echo "successfully inserted";
	}
	
	?>
</p>
                                </div>
                                                   
							   </div>
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->


</body>
<script>
function display_invoice(){
	document.getElementById('invoice1').style.display="block";
	document.getElementById('invoice2').style.display="block";
}
function validate_invoiceno(){
	var x=document.getElementById('invoice1').value;
	var y=document.getElementById('invoice2').value;
	if(y==""){
		document.getElementById('errorname2').innerHTML="invoice number required";
		return false;}
	else{
	if(x==y){return true;}
	else {
		document.getElementById('errorname2').innerHTML="Invoice Number is required";
		return false;}
	}
}




 

	function newpage(){
	console.log("function working");
	document.getElementById("bottom").innerHTML='<object type="type/html" data="FormHTML.php" width="100%" height="800"></object>';
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




</html>