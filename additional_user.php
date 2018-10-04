<?php   session_start();  ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/boot_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

<div class="container">
<p></p>
<form method="post" action="" name="form2" id="divright" >
<table class="tab">

<tr><td id="label"></td><td><input type="text" name="orderno" />
<script>var orderno=localStorage.getItem('key1');
document.forms["form2"]["orderno"].value=orderno;
localStorage.removeItem("key1");
</script></td></tr>
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
<tr><td></td><td align="center"><input type="submit" name="submit2" value="set" class="submit" /></td>
<td><input type="submit"  value="EXIT.." name="sub" class="btn btn-primary" onClick="exit_func()"/></td>
</tr>
	
</table>
</form>
</div>

<?php
if(isset($_POST['submit2'])){
		$order_no=$_POST['orderno'];
		echo $order_no;
		$des=$_POST['descript'];
		$amt=$_POST['amt'];
		$stage=$_POST['stage'];
		if($stage=="NONE") $Stage="";
		else $Stage=$stage;
		
		$conn = mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
		$sqlF="SELECT * FROM first WHERE WorkOrderNo=$order_no";
		$qry1=mysqli_query($conn,$sqlF)or die(mysqli_error($conn));
		$row=mysqli_fetch_array($qry1);
		if($row['Editable']==true){
		$sql="insert into add_work(add_OrderNo,stages,add_Description,add_Amount)
		values('$order_no','$Stage','$des','$amt')";
		$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
		echo "successfully inserted";}
		else {echo "<script>alert('Sorry,..You can not edit these fileds!');</script>";}
	}

	if(isset($_POST['sub'])){
		 header("Location:show_user.php");
	}
	?>
	
</body>
</html>