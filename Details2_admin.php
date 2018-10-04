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
localStorage.removeItem("key1");
</script>
<input type="submit" name="ok" value="OK"/>
</form>

<table border="5" cellspacing="0" cellpadding="0">
<tr>
<th>Description</th>
<th>Amount</th></tr>
<?php
if(isset($_POST['ok'])){
$var_orderno=$_POST['var_orderno'];
$conn =mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
$sql="SELECT * FROM add_work WHERE add_OrderNo='$var_orderno'";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$sql1="SELECT SUM(add_Amount) as amount FROM add_work WHERE add_OrderNo='$var_orderno'";
$qry1=mysqli_query($conn,$sql1)or die(mysqli_error($conn)); 

while($row=mysqli_fetch_array($qry)){
	echo "<tr><td>".$row['add_Description']."</td>";
	echo "<td>".$row['add_Amount']."</td></tr>";
}
  $total=mysqli_fetch_array($qry1);
  echo "<tr><td>Total Amount:</td><td>".$total['amount']."</td></tr>";
}
?></table>
<table>
<tr>
<td><input type="submit" id="exit" value="Exit" onclick="go_back()"/></td></tr>

</body>
</div>
<script>
function go_back(){
	window.location.href="show_admin.php";
	}
</script>
</html>