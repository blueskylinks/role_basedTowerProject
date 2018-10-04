<?php   session_start();  ?>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View</title>

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
	/*background-color: #ececec;*/
	background: rgba(0,255,0,.6);
   /* color: #b9b9b9;*/
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
}</style>
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
<?php 
 $conn =mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
$email=$_SESSION['varemail'];
$sql1="SELECT * from user WHERE userType=1 and Email='$email'";
$qry1=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
$row1=mysqli_fetch_array($qry1);
?>
     
<nav class="navbar navbar-inverse" style="height:13.5%;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
	<?php 
		if($row1['new_entry']==1){ 
      echo '<li><a href="FormHTML_user.php"><button class="btn btn-danger navbar-btn">&nbspNew Entry&nbsp</button></a></li>';} 
	  else{	echo '<li><a href="FormHTML_user.php"><button class="btn btn-danger navbar-btn" disabled>&nbspNew Entry&nbsp</button></a></li>';} ?>
      <li class="active"><a href="show_user.php"><button class="btn btn-danger navbar-btn" >&emsp;&nbspView&emsp;&nbsp&nbsp</button></a></li>
      <li><a href="search_user.php"><button class="btn btn-danger navbar-btn">&emsp;&nbspFilter&emsp;&nbsp&nbsp</button></a></li>
	  <?php if($row1['edit']==1){ 
      echo '<li><a href="edit_user.php"><button class="btn btn-danger navbar-btn">&emsp;&nbsp&nbspEdit&emsp;&nbsp&nbsp&nbsp</button></a></li> ';}
	  else{ echo '<li><a href="edit_user.php"><button class="btn btn-danger navbar-btn" disabled>&emsp;&nbsp&nbspEdit&emsp;&nbsp&nbsp&nbsp</button></a></li> '; }?>
      <?php if($row1['logbook']==1){
	  echo '<li><a href="lbsearch.php"><button class="btn btn-danger navbar-btn" >&nbspLog Book&nbsp&nbsp</button></a></li>';}  
	  else {echo '<li><a href="lbsearch.php"><button class="btn btn-danger navbar-btn" disabled>&nbspLog Book&nbsp&nbsp</button></a></li>';} ?>
      <li><a href="work_user.php"><button class="btn btn-danger navbar-btn">DashBoard</button></a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right" >
       <a class="dropdown-toggle" data-toggle="dropdown"> 
	      <li><h3 style="font-size:27px; color:white;" title="Logout"><i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>&nbsp Sri SaiRam Engineering Service </h3></li>
	   </a>
	   
	   <ul class="dropdown-menu dropdown-user">
            <li><a data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-fw" ></i> User Profile</a> </li>
			<li class="divider"></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
	  </ul>
    </div>
  </div>
  

   <div class="panel panel-default" width="100%" >
   <form name="form" method="post" action="">
		
		<div class="row" >
				<div class="col-xs-2">
				<input type="text" class="form-control" name="search_cust_name" placeholder="Customer Name"/>
				</div>
				
		
			
		<!-- select stage: -->
			
				<div class="col-xs-2">
					<select name="stage"  class="form-control" onchange="select_stage(this)"  >
						<option>All</option>
						<option>Inspection</option>
						<option>Foundation</option>
						<option>Errection</option>
						<option>Comissioning</option>
						<option>Maintenance</option>
						<option>De-Errection</option>
						<option>Goods</option>
						<option>Invoice </option>
						<option>NonInvoice</option>
					</select>
				</div>
			
			<div class="col-xs-2">
				<input type="submit"  value="Search.." name="submit" class="btn btn-primary"/>
			 </div>
		
		</div>

</form>
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
		  
		  $dbfirstname=$_SESSION['varname'];
		   $dblastname=$_SESSION['varpass'];
		    $dbcontact=$_SESSION['varcontact'];
			$email=$_SESSION['varemail'];
			
			echo "<div class='row'>USER NAME:".$dbfirstname."\x20".$dblastname."</div>";
			//echo "<div class='row'>USER password:".$dblastname."</div>";
			echo "<div class='row'>USER CONTACT NUMBER:".$dbcontact."</div>";
			echo "<div class='row'>USER CONTACT NUMBER:".$email."</div>";
		  ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>  
    </div>
  </div>
  
  
  
<?php
$conn=mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
if(isset($_POST['submit'])){
$search=$_POST['search_cust_name'];
$wo=$_POST['stage'];
if($search==""){
if($wo=="NonInvoice"){
$sql='SELECT * FROM `first` where stage != "Invoice"';
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
}
else if($wo=="All")
{
	$sql='SELECT * FROM `first` ORDER BY id DESC';
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));}
else{
$sql='SELECT * FROM `first` where stage LIKE "%'.$wo.'%"';
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));}
}
else{
$sql='SELECT * FROM `first` where cust_name LIKE "%'.$search.'%"';
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
}
}

else{
	$sql='SELECT * FROM `first` ORDER BY id DESC ';
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
}
?>

 
      <!-- /.row -->
	    
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
			
			<div id="bottom" width="80%" height="800">
			</div>
			
                 <table align="center" width="100%" cellpadding="1" cellspacing="0" border="5" bordercolor="#ccddff" id="dataTables-example" >

                     <thead>
                        <tr style='font-size:13px;'>
						<th rowspan="2" >SL No</th>
						<th colspan="2" >Client details</th>
						<th colspan="2" >Site Details</th>
						<th colspan="3" >Nature Of Work</th>
						<th colspan="2" >Additionals</th> 
						<th rowspan="2" >Order No</th>
						<th rowspan="2" >Invoice No</th>
							<!--<th class="gtext">Remarks</th> -->
						<th rowspan="2" >Engineer Details</th>
						<th rowspan="2" >Type Of Tower</th>
						<th rowspan="2" >Height Of Tower</th>
					   </tr>

					<tr style='font-size:13px;'>
						<th scope="col" >Name</th>
						<th scope="col" >Contact</th>
						<th scope="col" >Name</th>
						<th scope="col" >Address</th>
						<th scope="col" >Stage</th>
						<th scope="col" >Edit</th>
						<th scope="col" >Details</th>
						<th scope="col" >Edit</th>
						<th scope="col" >Details</th>
					</tr>
                    </thead>
				
					<tbody style='font-size:13px;'>
					<?php
						while($row=mysqli_fetch_array($qry)){
							if($row['Invoice_no']!=""){
								echo "<tr class='subheader_d'>";
								echo "<td >".$row['id']."</td>";
								echo "<td  style=' text-transform: uppercase; font-weight:bold; ' >".$row['cust_name']."</td><td>".$row['Contact_Person']."<br>".$row['Cell_Number']."</td>";
								echo "<td  style=' text-transform: uppercase; font-weight:bold; ' >".$row['SiteName']."</td>";
								echo "<td >".$row['Dist']."<br>".$row['TQ']."</td>";
								echo "<td>".$row['stage']."</td>";	
								echo "<td >Edit</td>";
								if($row1['edit']==1){
								echo "<td  id='clickable_td1' style='font-size:13px;'><a onclick='Details1()'>Show More</a></td>";}
								else {echo "<td  style='font-size:13px;'>Show More</td>";}
								echo "<td  >Edit</td>";
								if($row1['edit']==1){
								echo "<td   id='clickable_td1' style='font-size:13px;'><a onclick='Details2()'>Show More</a></td>";}
								else {echo "<td style='font-size:13px;'>Show More</td>";}
								echo "<td >".$row['WorkOrderNo']."</td>";
								echo "<td >".$row['Invoice_no']."</td>";
								echo "<td >".$row['EngineerName']."<br>".$row['EngineerNo']."</td>";
								echo "<td >".$row['TypeOfTower']."</td>";	
								echo "<td >".$row['heightOfTower']."M</td></tr>";	
							}
							else{
								echo "<tr class='subheader'>";
								echo "<td >".$row['id']."</td>";
								echo"<td  style=' text-transform: uppercase; font-weight:bold; ' >".$row['cust_name']."</td><td>".$row['Contact_Person']."<br>".$row['Cell_Number']."</td>";
								echo "<td  style=' text-transform: uppercase; font-weight:bold; ' >".$row['SiteName']."</td>";
								echo "<td >".$row['Dist']."<br>".$row['TQ']."</td>";
								echo "<td>".$row['stage']."</td>";
								if($row1['edit']==1){
								echo "<td  id='clickable_td' onclick='add_state()'>Edit</td>";
								echo "<td  id='clickable_td1' style='font-size:13px;'><a onclick='Details1()'>Show More</a></td>";}
								else {echo "<td>Edit</td>";
								echo "<td  style='font-size:13px;'>Show More</td>";}
								if($row1['edit']==1){
								echo "<td  id='clickable_td' onclick='additionals()'>Edit</td>";
								echo "<td  id='clickable_td1' style='font-size:13px;'><a onclick='Details2()'>Show More</a></td>";}
								else {echo "<td>Edit</td>";
								echo "<td style='font-size:13px;'>Show More</td>";}
								echo "<td >".$row['WorkOrderNo']."</td>";
								echo "<td >".$row['Invoice_no']."</td>";
								echo "<td >".$row['EngineerName']."<br>".$row['EngineerNo']."</td>";
								echo "<td >".$row['TypeOfTower']."</td>";	
								echo "<td >".$row['heightOfTower']."M</td></tr>";	
							}
							
						}
					?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
	    
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/boot_admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/boot_admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/boot_admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/boot_admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/boot_admin/dist/js/sb-admin-2.js"></script>

<script>
 $(document).ready(function() {
        $('#dataTables-example').DataTable({
                    aLengthMenu: [
		[25, 50, 100, 200, -1],
		[25, 50, 100, 200, "All"]
		],
		iDisplayLength: -1,
		responsive: true,
		"aaSorting": [],
		"ordering": false,
		scrollY: 350
        });
    });
function add_state(){
	var tabId,orderno; 
	var table=document.getElementById('dataTables-example'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
			orderno=this.cells[10].innerHTML;
			localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
			window.location.href="add_state_user.php";
}
function additionals(){
	var tabId,orderno; 
	var table=document.getElementById('dataTables-example'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[10].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
	window.location.href="additional_user.php";
}
function Details1(){
	var table=document.getElementById('dataTables-example'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[10].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
	window.location.href="Details1_user.php";
}
function Details2(){
	var table=document.getElementById('dataTables-example'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[10].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
	window.location.href="Details2_user.php";
}
</script>

</body>
</html>