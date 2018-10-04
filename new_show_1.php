<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="/boot_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/boot_admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="/boot_admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/boot_admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/boot_admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/boot_admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.subheader_d{
		font-size:11pt;
		background: rgba(0,255,0,.6);
	}
	.subheader{
		font-size:11pt;
	}
	
#clickable_td:hover{
	cursor:pointer;
	background: #0ac5f4;
	color:#262626;
}
#clickable_td1:hover{
	cursor:pointer;
}
#clickable_td1{
	color:blue;
	
}
a{
	bottom-border:5px solid blue;
}
	</style>
	
</head>
<body>
<?php
$conn=mysqli_connect("localhost", "root", "","tower_project");
if(isset($_POST['submit'])){
$search=$_POST['search_stage'];
$sql='SELECT * FROM `first` where stage LIKE "'.$search.'"';
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
}

else{
	$sql='SELECT * FROM `first` ';
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
}
?>


<nav class="navbar navbar-inverse navbar-fixed-top" style="height:20%">
  <div class="container-fluid">
  
    <ul class="nav navbar-nav">
      <li ><a href="FormHTML_1.php"><button class="btn btn-danger navbar-btn">New Entry</button></a></li>
      <li class="active"><a href="show_1.php"><button class="btn btn-danger navbar-btn" >&nbsp&nbsp&nbsp View &nbsp&nbsp&nbsp   </button></a></li>
      <li><a href="search.php"><button class="btn btn-danger navbar-btn">&nbsp&nbsp&nbsp Filter &nbsp&nbsp&nbsp </button></a></li>
      <li><a href="edit.php"><button class="btn btn-danger navbar-btn">&nbsp&nbsp&nbsp Edit &nbsp&nbsp&nbsp   </button></a></li>
	  <li><a href="lbsearch.php"><button class="btn btn-danger navbar-btn"> &nbsp Log Book &nbsp</button></a></li>	  
      <li><a href="work.php"><button class="btn btn-danger navbar-btn">DashBoard </button></a></li>
    </ul>
	  <ul class="nav navbar-nav navbar-right" >
        <li><h3 style="font-size:27px; color:white; font-weight:bold;"><span class="glyphicon glyphicon-user"></span>&nbsp Shri Sai Ram Engineering Works </h3></li>
      </ul>
  </div>
  

   <div class="panel panel-default">
   <form name="form" method="post" action="" id="myform">
		
     <div class="container">
			
		<div class="row" >
				
		   
			<div class="col-xs-2">
				Stage:<input type="text" class="form-control" name="search_stage"/>
				</div>
				<script>var stagename=localStorage.getItem('stage_key');
				document.forms["form"]["search_stage"].value=stagename;
				localStorage.removeItem("stage_key");
			</script>
			
				
			<br>
			 <div class="col-xs-2">
				<input type="submit"  value="Search.." name="submit" class="btn btn-primary"/>
			 </div>
		</div>
	</div>

</form>
 </div>
 
</nav>


       <!-- /.row -->
	    
<div  style="margin-top:12%;" width="100%" class="row" >		
    <table align="center" cellpadding="1" cellspacing="0" border="7" id="table" width="100%" height="100%">
	<thead>
		<tr class="Topheader">
			<th class="gtext" width='2%' rowspan="2">SL No</th>
			<th class="gtext"  width='20%' colspan="2">Client details</th>
			<th class="gtext" width='20%' colspan="2">Site Details</th>
			<th class="gtext" width='20%' colspan="3">Nature Of Work</th>
			<th class="gtext" width='20%' colspan="2">Additionals</th> 
			<th class="gtext" width='5%' rowspan="2">Engineer Details</th>
			<th class="gtext"width='5%' rowspan="2">Invoice No</th>

			<th class="gtext" width='3%' rowspan="2">Order No</th>
			<th class="gtext" width='2%' rowspan="2">Type Of Tower</th>
			<th class="gtext" width='3%' rowspan="2">Height Of Tower</th>
		</tr>

		<tr>
			<th scope="col"  width='5%' class="subheader">Name</th><th scope="col" width='5%' class="subheader">Contact</th>
			<th scope="col" width='10%' class="subheader">Name</th><th scope="col" width='5%' class="subheader">Address</th>
			<th scope="col" width='5%' class="subheader">Stage</th><th scope="col" width='5%' class="subheader">Edit</th><th scope="col" width='5%' class="subheader">Details</th>
			<th scope="col" width='5%' class="subheader">Edit</th><th scope="col" width='5%' class="subheader">Details</th>
		</tr>

     </thead>
	<tbody>
	  <?php

			while($row=mysqli_fetch_array($qry)){
				if($row['Invoice_no']!=""){
					echo "<tr class='subheader_d'>";
					echo "<td  align='left'>".$row['id']."</td>";
					echo"<td align='left' style=' text-transform: uppercase; font-weight:bold; ' >".$row['cust_name']."</td><td >".$row['Contact_Person']."<br>".$row['Cell_Number']."</td>";
					echo "<td align='left' style=' text-transform: uppercase; font-weight:bold; ' >".$row['SiteName']."</td>";
					echo "<td align='left'>".$row['Dist']."<br>".$row['TQ']."</td>";
					echo "<td>".$row['stage']."</td>";	
					echo "<td align='left'>Edit</td>";
					echo "<td align='left' 'left' id='clickable_td1'><a onclick='Details1()'>Show More</a></td>";
					echo "<td align='left' >Edit</td>";
					echo "<td align='left' 'left'  id='clickable_td1'><a onclick='Details2()'>Show More</a></td>";
					echo"<td align='left'>".$row['EngineerName']."<br>".$row['EngineerNo']."</td>";
					echo "<td align='left'>".$row['Invoice_no']."</td>";
					echo "<td align='left'>".$row['WorkOrderNo']."</td>";
					echo "<td align='left'>".$row['TypeOfTower']."</td>";	
					echo "<td align='left'>".$row['heightOfTower']."M</td></tr>";	
				}
				else{
					echo "<tr class='subheader'>";
					echo "<td align='left'>".$row['id']."</td>";
					echo"<td  align='left' style=' text-transform: uppercase; font-weight:bold; ' >".$row['cust_name']."</td><td >".$row['Contact_Person']."<br>".$row['Cell_Number']."</td>";
					echo "<td align='left' style=' text-transform: uppercase; font-weight:bold; ' >".$row['SiteName']."</td>";
					echo "<td align='left'>".$row['Dist']."<br>".$row['TQ']."</td>";
					echo "<td>".$row['stage']."</td>";	
					echo "<td align='left' 'left' id='clickable_td' onclick='add_state()'>Edit</td>";
					echo "<td align='left' 'left' id='clickable_td1'><a onclick='Details1()'>Show More</a></td>";
					echo "<td align='left' id='clickable_td' onclick='additionals()'>Edit</td>";
					echo "<td align='left' 'left' id='clickable_td1'><a onclick='Details2()'>Show More</a></td>";
					echo"<td align='left'>".$row['EngineerName']."<br>".$row['EngineerNo']."</td>";
					echo "<td align='left'>".$row['Invoice_no']."</td>";
					echo "<td align='left'>".$row['WorkOrderNo']."</td>";
					echo "<td align='left'>".$row['TypeOfTower']."</td>";	
					echo "<td align='left'>".$row['heightOfTower']."M</td></tr>";	
				}
			}
		?>
		</tbody>
					
		</table>
     
</div>
	    
  <!-- /.row -->

<!-- jQuery -->
    <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>

  

    <!-- DataTables JavaScript -->
    <script src="/boot_admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/boot_admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
   
   

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
   	window.onload = function () {
        document.myform.Submit1.click();
        }
		
		
function add_state(){
	var tabId,orderno; 
	var table=document.getElementById('table'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[12].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
			window.location.href="add_state_1.php";
}
function additionals(){
	var tabId,orderno; 
	var table=document.getElementById('table'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[12].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
	window.location.href="additional.php";
}
function Details1(){
	var table=document.getElementById('table'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[12].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
	window.location.href="Details1.php";
}

function Details2(){
	var table=document.getElementById('table'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[12].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
	window.location.href="Details2.php";
}
    </script>







</body>
</html>