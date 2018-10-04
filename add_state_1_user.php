<?php   session_start();  ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/boot_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>
  <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>
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


<form action="" method="POST" name="form1" id="myform">
<div><p><hr></p></div>
<div class="container">
	<div class="row" >
		
		<div class="col-lg-1">
		Enter WO:
		</div>
		<div class="col-lg-2">
		<input type="text" class="form-control" name="search_wo" id="searchbtn"/>
		
		<script>var orderno=localStorage.getItem('key1');
      document.forms["form1"]["search_wo"].value=orderno;
	  localStorage.removeItem("key1");
</script>
		</div>
		<div class="col-lg-2">
		<input type="submit"  value="Search.." name="search" class="btn btn-primary" onClick='saveValue();'/>
		<script>  function saveValue(){
            var val = document.getElementById('searchbtn').value; // get the value. 
			console.log(val);
            localStorage.setItem("key1", val);// Every time user writing something, the localStorage's value will override . 
        }</script>  
		</div>
		<input name="stage_name" id="stage_name" type="hidden" value=""/>
	</div>
</div>
<div class="container">
<div><p></p></div>
<div>Work Order No:<input name="st_wono" id="st_wono" type="text" value="">  
 
	Customer Name:<input name="cust_n" size="50" id="cust_n" type="text" value=""disabled>
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
		<input type="text" name="st1" value="Inspection"  style="text-align:center" disabled/><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d1" id="date" type="date"></td>
		<td width="150">
		<input name="st1_engname"  id="eng1" type="text"></td>
		<td width="500">
		<textarea id="st1_comment" type="text" name="st1_comment"  rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l1" id="st_l1" type="hidden" value="0"/>
		<input name="set_d1"  id="set_d1" type="submit" value="Update"></td>
	</tr>
	
	<tr>
		<td width="150">
		<input type="text" name="st2" value="Foundation"  style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d2"   id="date" type="date"></td>
		<td width="150">
		<input name="st2_engname"   id="eng2" type="text"></td>
		<td width="500">
		<textarea id="st2_comment" type="text" name="st2_comment"  rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l2" id="st_l2" type="hidden" value="0"/>
		<input name="set_d2"   id="set_d2" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st3" value="Errection"  style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d3"   id="date" type="date"></td>
		<td width="150">
		<input name="st3_engname"   id="eng1" type="text"></td>
		<td width="500">
		<textarea id="st3_comment" type="text" name="st3_comment"  rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l3" id="st_l3" type="hidden" value="0"/>
		<input name="set_d3"   id="set_d3" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st4" value="Commissioning"  style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d4"   id="date" type="date"></td>
		<td width="150">
		<input name="st4_engname"   id="eng2" type="text"></td>
		<td width="500">
		<textarea id="st4_comment" type="text" name="st4_comment"  rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l4" id="st_l4" type="hidden" value="0"/>
		<input name="set_d4"   id="set_d4" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st5" value="Maintenance"   style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d5"   id="date" type="date"></td>
		<td width="150">
		<input name="st5_engname"   id="eng1" type="text"></td>
		<td width="500">
		<textarea id="st5_comment" type="text" name="st5_comment"  rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l5" id="st_l5" type="hidden" value="0"/>
		<input name="set_d5"   id="set_d5" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st6" value="De-Errection"  style="text-align:center" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d6"   id="date" type="date"></td>
		<td width="150">
		<input name="st6_engname"   id="eng2" type="text"></td>
		<td width="500">
		<textarea id="st6_comment" type="text" name="st6_comment"  rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l6" id="st_l6" type="hidden" value="0"/>
		<input name="set_d6"   id="set_d6" type="submit" value="Update"></td>
	</tr>
	<tr>
		<td width="150">
		<input type="text" name="st7" style="text-align:center" value="Goods" disabled /><span id="errorname" style="color:red">
		<td width="150">
		<input name="st_d7"   id="date" type="date"></td>
		<td width="150">
		<input name="st7_engname"   id="eng1" type="text"></td>
		<td width="500">
		<textarea id="st7_comment" type="text" name="st7_comment"  rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_l7" id="st_l7" type="hidden" value="0"/>
		<input name="set_d7" id="set_d7" type="submit" value="Update"></td>
	</tr>
	
	<tr>
		<td width="150">
		<input type="text" name="ste1" style="text-align:left"  />
		<td width="150">
		<input name="st_de1"   id="date" type="date"></td>
		<td width="150">
		<input name="ste1_engname"   id="eng1" type="text"></td>
		<td width="500">
		<textarea id="ste1_comment" type="text" name="ste1_comment"  rows="1" style="height:25px" cols="80"></textarea></td>
		<td width="150">
		<input name="st_e1l" id="st_e1l" type="hidden" value="0"/>
		<input name="set_de1" id="set_de1" type="submit" value="Update"></td>
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
		<input name="st_d8"   id="date" type="date"></td>
		
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
		<input name="set_d8"   id="set_d8" type="submit" value="Update"></td>
	</tr>

</table>
</div>
</form>
<div class="col-lg-2" style="float:right">
		<input type="submit"  value="EXIT.." name="" class="btn btn-primary" onclick='go_back();'/>
</div>

 
<?php

function display_stage(){
$OrderNo=$_POST['search_wo'];
$state_n;
echo $OrderNo;

echo "<script>document.forms['form1']['st_wono'].value='$OrderNo'</script>";
if(empty($OrderNo)){echo "display_stage is not working";}
else{
	echo "display_stage is working";
$conn =mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
$sql="SELECT wo_stage.wo_sno,wo_stage.st_slno, wo_stage.wo_stname,wo_stage.work_stateno, wo_stage.steng_name, wo_stage.stage_comment, work_state.state_name, wo_stage.wo_udate FROM wo_stage,work_state WHERE (wo_stage.work_stateno=work_state.wo_st) AND wo_stage.wo_sno=$OrderNo";
$sql_customer="SELECT cust_name, SiteName,Editable from first where WorkOrderNo=$OrderNo";
$sql_cust_qry=mysqli_query($conn,$sql_customer)or die(mysqli_error($conn));
$wo_slno1[]=null;
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	$i=0;
	//$fetch=mysqli_fetch_array($sql_cust_qry)
	$row=mysqli_fetch_array($sql_cust_qry);
		$cust=$row['cust_name'];
		echo "<script>document.forms['form1']['cust_n'].value='$cust'</script>";
		$edit=$row['Editable'];
		if($edit==FALSE){
			echo "<script>var x = prompt('Please Enter password,to Edit these feilds');
			if(x=='1234'){document.getElementById('set_d1').disabled=false;
			document.getElementById('set_d2').disabled=false;
			document.getElementById('set_d3').disabled=false;
			document.getElementById('set_d4').disabled=false;
			document.getElementById('set_d5').disabled=false;
			document.getElementById('set_d6').disabled=false;
			document.getElementById('set_d7').disabled=false;
			document.getElementById('set_d8').disabled=false;}
			else{ 
			document.getElementById('set_d1').disabled=true;
			document.getElementById('set_d2').disabled=true;
			document.getElementById('set_d3').disabled=true;
			document.getElementById('set_d4').disabled=true;
			document.getElementById('set_d5').disabled=true;
			document.getElementById('set_d6').disabled=true;
			document.getElementById('set_d7').disabled=true;
			document.getElementById('set_d8').disabled=true;}</script>";
			
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
		case 0: echo "<script>document.forms['form1']['st_d1'].value='$wo_date[0]'</script>";
			echo "<script>document.forms['form1']['st1_engname'].value='$wo_engname[0]'</script>";
			echo "<script>document.forms['form1']['st1_comment'].value='$wo_com[0]'</script>";
			echo "<script>document.forms['form1']['st_l1'].value='$wo_slno[0]'</script>";
			break;
		case 1: echo "<script>document.forms['form1']['st_d2'].value='$wo_date[1]'</script>";
			echo "<script>document.forms['form1']['st2_engname'].value='$wo_engname[1]'</script>";
			echo "<script>document.forms['form1']['st2_comment'].value='$wo_com[1]'</script>";
			echo "<script>document.forms['form1']['st_l2'].value='$wo_slno[1]'</script>";
			break;
		case 2: echo "<script>document.forms['form1']['st_d3'].value='$wo_date[2]'</script>";
			echo "<script>document.forms['form1']['st3_engname'].value='$wo_engname[2]'</script>";
			echo "<script>document.forms['form1']['st3_comment'].value='$wo_com[2]'</script>";
			echo "<script>document.forms['form1']['st_l3'].value='$wo_slno[2]'</script>";
			break;
		case 3: echo "<script>document.forms['form1']['st_d4'].value='$wo_date[3]'</script>";
			echo "<script>document.forms['form1']['st4_engname'].value='$wo_engname[3]'</script>";
			echo "<script>document.forms['form1']['st4_comment'].value='$wo_com[3]'</script>";
			echo "<script>document.forms['form1']['st_l4'].value='$wo_slno[3]'</script>";
			break;
		case 4: echo "<script>document.forms['form1']['st_d5'].value='$wo_date[4]'</script>";
			echo "<script>document.forms['form1']['st5_engname'].value='$wo_engname[4]'</script>";
			echo "<script>document.forms['form1']['st5_comment'].value='$wo_com[4]'</script>";
			echo "<script>document.forms['form1']['st_l5'].value='$wo_slno[4]'</script>";
			break;
		case 5: echo "<script>document.forms['form1']['st_d6'].value='$wo_date[5]'</script>";
			echo "<script>document.forms['form1']['st6_engname'].value='$wo_engname[5]'</script>";
			echo "<script>document.forms['form1']['st6_comment'].value='$wo_com[5]'</script>";
			echo "<script>document.forms['form1']['st_l6'].value='$wo_slno[5]'</script>";
			break;
		case 6: echo "<script>document.forms['form1']['st_d7'].value='$wo_date[6]'</script>";
			echo "<script>document.forms['form1']['st7_engname'].value='$wo_engname[6]'</script>";
			echo "<script>document.forms['form1']['st7_comment'].value='$wo_com[6]'</script>";
			echo "<script>document.forms['form1']['st_l7'].value='$wo_slno[6]'</script>";
			break;
		case 7: echo "<script>document.forms['form1']['st_d8'].value='$wo_date[7]'</script>";
			echo "<script>document.forms['form1']['st8_engname'].value='$wo_engname[7]'</script>";
			echo "<script>document.forms['form1']['st8_comment'].value='$wo_com[7]'</script>";
			echo "<script>document.forms['form1']['st_l8'].value='$wo_slno[7]'</script>";
			break;
		case 8: echo "<script>document.forms['form1']['st_de1'].value='$wo_date[8]'</script>";
			echo "<script>document.forms['form1']['ste1_engname'].value='$wo_engname[8]'</script>";
			echo "<script>document.forms['form1']['ste1_comment'].value='$wo_com[8]'</script>";
			echo "<script>document.forms['form1']['ste1'].value='$wo_stagename[8]'</script>";
			echo "<script>document.forms['form1']['st_e1l'].value='$wo_slno[8]'</script>";
			break;
		}
		if($row['wo_stname']!=""){
		$state_n=$row['wo_stname'];
		echo "<script>document.forms['form1']['stage_name'].value='$state_n'</script>";
		}
		//if($wo_stagename[$i!=""]){
		//echo "<script>document.forms['form1']['stage_name'].value='$wo_stagename[$i]'</script>";
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
echo display_stage();
}



if (isset($_POST['set_d1'])){
//echo $_POST['st_l1'];
$var_no=$_POST['st_l1'];
$var_d1=$_POST['st_d1'];
$var_engname=$_POST['st1_engname'];
$var_comment=$_POST['st1_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "sai_ram321#","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Inspection',wo_udate='$var_d1',steng_name='$var_engname',stage_comment='$var_comment' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );
echo '<script>var orderno=localStorage.getItem("key1");
	console.log(orderno);
document.forms["form1"]["search_wo"].value=orderno;</script> ';
echo display_stage();
echo "Successfully Updated....";

}
}


if (isset($_POST['set_d2'])){
$var_no=$_POST['st_l2'];
$var_d1=$_POST['st_d2'];
$var_engname=$_POST['st2_engname'];
$var_comment=$_POST['st2_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "sai_ram321#","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Foundation', wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );
echo '<script>var orderno=localStorage.getItem("key1");
	console.log(orderno);
document.forms["form1"]["search_wo"].value=orderno;</script> ';
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
$conn =new mysqli("localhost", "root", "sai_ram321#","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Errection',wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );
echo '<script>var orderno=localStorage.getItem("key1");
	console.log(orderno);
document.forms["form1"]["search_wo"].value=orderno;</script> ';
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
$conn =new mysqli("localhost", "root", "sai_ram321#","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Commissioning', wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );
echo '<script>var orderno=localStorage.getItem("key1");
	console.log(orderno);
document.forms["form1"]["search_wo"].value=orderno;</script> ';
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
$conn =new mysqli("localhost", "root", "sai_ram321#","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Maintenance', wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );
echo '<script>var orderno=localStorage.getItem("key1");
	console.log(orderno);
document.forms["form1"]["search_wo"].value=orderno;</script> ';
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
$conn =new mysqli("localhost", "root", "sai_ram321#","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='De-Errection', wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );
echo '<script>var orderno=localStorage.getItem("key1");
	console.log(orderno);
document.forms["form1"]["search_wo"].value=orderno;</script> ';
echo display_stage();
echo "Successfully Updated....";
}
} 

if (isset($_POST['set_d7'])){
$var_no=$_POST['st_17'];
$var_d1=$_POST['st_d7'];
$var_engname=$_POST['st7_engname'];
$var_comment=$_POST['st7_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "sai_ram321#","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Goods',wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );
echo '<script>var orderno=localStorage.getItem("key1");
	console.log(orderno);
document.forms["form1"]["search_wo"].value=orderno;</script> ';
echo display_stage();
echo "Successfully Updated....";

}
} 

//editable input feild....
if (isset($_POST['set_de1'])){
$var_no=$_POST['st_e1l'];
$var_d1=$_POST['st_de1'];
$var_engname=$_POST['ste1_engname'];
$var_comment=$_POST['ste1_comment'];
$var_wono=$_POST['st_wono'];
$stage_name=$_POST['ste1'];
$conn =new mysqli("localhost", "root", "sai_ram321#","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='$stage_name',wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );
echo '<script>var orderno=localStorage.getItem("key1");
	console.log(orderno);
document.forms["form1"]["search_wo"].value=orderno;</script> ';
echo display_stage();
echo "Successfully Updated....";
}
} 

if (isset($_POST['set_d8'])){
$var_no=$_POST['st_l8'];
$var_d1=$_POST['st_d8'];
$var_engname=$_POST['st8_engname'];
$var_comment=$_POST['st8_comment'];
$var_wono=$_POST['st_wono'];
$conn =new mysqli("localhost", "root", "sai_ram321#","tower_project");
echo "<br>";
echo $var_no;
echo "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql1="UPDATE wo_stage SET wo_stname='Invoice', wo_udate='$var_d1',stage_comment='$var_comment',steng_name='$var_engname' WHERE st_slno='$var_no'";
$qry=mysqli_query($conn,$sql1)or die ( mysqli_error($conn) );
echo '<script>var orderno=localStorage.getItem("key1");
	console.log(orderno);
document.forms["form1"]["search_wo"].value=orderno;
localStorage.removeItem("key1");</script> ';
 echo display_stage(); 
$sql2="UPDATE first SET Invoice_no='$var_comment',Editable='FALSE' WHERE WorkOrderNo='$var_wono'";
$qry=mysqli_query($conn,$sql2)or die ( mysqli_error($conn) );
echo "Successfully Updated....";
}
} 
?>
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



function go_back(){
	window.location.href="show_user.php";
	}
</script>

</body>
</html>
	