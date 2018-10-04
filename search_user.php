<?php   session_start();  ?>

<!DOCTYPE html>
<html lang="en">

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
$conn=mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
if(isset($_POST['submit'])){
$search=$_POST['search_cust_name'];
$wo=$_POST['search_wo'];
$sql='SELECT * FROM `first` where cust_name LIKE "%'.$search.'%" AND WorkOrderNo LIKE "%'.$wo.'%"';
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
}

else{
	$sql='SELECT * FROM `first` ';
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
}

 $conn =mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
$email=$_SESSION['varemail'];
$sql1="SELECT * from user WHERE userType=1 and Email='$email'";
$qry1=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
$row1=mysqli_fetch_array($qry1);

?>


	 <form name="form" method="post" action="">
		<div class="panel panel-default">
			<div class="panel-heading">
                            Fiter Records:
			</div>
            <div class="container">
			
			<div class="row" >
				<div class="col-xs-1">
				<a href="/work_user.php">HOME</a>
				</div>
				
			    <div class="col-xs-4">
				Customer Name:<input type="text" class="form-control" name="search_cust_name"/>
				</div>
				
			    <div class="col-xs-2">
				WorkOrder Number:<input type="text" class="form-control" name="search_wo"/>
				</div>
				
				<div class="col-xs-2">
				Engineer Name:<input type="text" class="form-control" name="eng_name"/>
				</div>
				
				<br>
				<div class="col-xs-2">
				<input type="submit"  value="Search.." name="submit" class="btn btn-primary"/>
				</div>
			</div>
		</div>
		</div>

	</form>
            <!-- /.row -->
	    
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
			
			<div id="bottom" width="80%" height="800">
			</div>
			
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
					<th class="gtext">Wo No</th>
					<th class="gtext">Site_Name</th>
					<th class="gtext">Customer_Name</th>
					<th class="gtext">State</th>
					<th class="gtext">Engineer_Name</th>
					<th class="gtext">Engineer_No</th>
					<th class="gtext">Project_Stage</th>
					<th class="gtext">Edit</th>
					<th >Edit Stage</th>
                                    </tr>
                                </thead>
					<tbody>
				<?php
					while($row=mysqli_fetch_array($qry)){
					echo "<tr><td>".$row['WorkOrderNo']."</td>";
					echo "<td>".$row['SiteName']."</td>";
					echo "<td>".$row['cust_name']."</td>";
					echo "<td>".$row['State']."</td>";
					echo "<td>".$row['EngineerName']."</td>";
					echo "<td>".$row['EngineerNo']."</td>";
					echo "<td>".$row['stage']."</td>";
					if($row1['edit']==1){
					echo "<td>".'<button type="submit" class="btn btn-primary btn-xs" onclick="Edit_func()">.....</button>'."</td>";
					echo "<td>".'<button type="submit" class="btn btn-primary btn-xs" onclick="Edit_stage()">Edit</button>'."</td>";}
					else {echo "<td>".'<button type="submit" class="btn btn-primary btn-xs" onclick="Edit_func()" disabled>.....</button>'."</td>";
					echo "<td>".'<button type="submit" class="btn btn-primary btn-xs" onclick="Edit_stage()" disabled>Edit</button>'."</td>";}
					echo "</tr>";
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
	
	function Edit_func()
	{
		var table=document.getElementById('dataTables-example'),rIndex; 
	for(var i=1;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			orderno=this.cells[0].innerHTML;
			localStorage.setItem("key1",orderno);
			console.log(orderno);
		};
	}
		window.location.href="edit_user.php";
	}
	
	function Edit_stage()
	{
		var table=document.getElementById('dataTables-example'),rIndex; 
	for(var i=1;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			orderno=this.cells[0].innerHTML;
			localStorage.setItem("key1",orderno);
			console.log(orderno);
		};
	}
		window.location.href="add_state_1_user.php";
	}
    </script>

</body>

</html>
