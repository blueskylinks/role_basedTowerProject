<?php   session_start(); 
unset($_SESSION['stage']); ?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
.popup{
	border-style:solid;
	border-width:2px;
	border-radius:6px;
	display:inline-block;
}
#exit:hover{
	cursor:pointer;
	background:#f4580a;
	color:#262626;
}
#exit{
	font-weight:bold;
	font-size:18px;
}
#edit{
	font-weight:bold;
	font-size:18px;
}
</style>
</head>
<body align="center">
 <?php
      if(!isset($_SESSION['admin_use'])) // If session is not set then redirect to Login Page
       {
          header("Location:Loginpage.php"); 
		  exit();
       }
        //  echo $_SESSION['use'];
		//echo "<a href='logout.php'> Logout</a> ";

?>

<div class="popup" align="center">
<form action="" method="post" name="form1">
Work Order No:<input type="text" name="var_orderno" />
<script>var orderno=localStorage.getItem('key1');
document.forms["form1"]["var_orderno"].value=orderno;
</script>
<input type="submit" name="ok" value="OK"/>
</form>



<table border="3" cellspacing="0" cellpadding="0">
<tr >
<th>Stages</th>
<th>Date</th>
<th>Comments</th>
<th>Engineer</th></tr>
<?php
if(isset($_POST['ok'])){
$var_orderno=$_POST['var_orderno'];
$conn =mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
$sql="SELECT * FROM wo_stage WHERE wo_sno='$var_orderno'";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));

while($row=mysqli_fetch_array($qry)){
	$source = $row['wo_udate'];
	//$date = strtotime($source);
	$date = new DateTime($source);
	//echo date('d/m/Y',$date); //output will be 10 July 2013{/code}
	//echo $date->format('d.m.Y'); // 31.07.2012
	echo "<tr><td>".$row['wo_stname']."</td>";
	echo "<td>".$source."</td>";
	echo "<td>".$row['stage_comment']."</td>";
	echo "<td>".$row['steng_name']."</td></tr>";
}
}
?></table>
<table>
<tr>
<td><input type="submit" id="exit" value="Exit" onclick="go_back()"/></td>
<td><input type="submit" id="edit" value="Edit" onclick="edit()"/></td>

</tr>
</table>
</body>
</div>
<script>
function go_back(){
	window.location.href="show_admin.php";
	}
function edit(){
	window.location.href="add_state_1_admin.php";
	}
</script>
</html>