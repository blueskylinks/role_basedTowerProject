<?php   session_start(); 
unset($_SESSION['stage']); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log Book</title>

    <!-- Bootstrap Core CSS -->
    <link href="/boot_admin/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

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

	<link rel="stylesheet" href="/boot_admin/vendor/autocomplete/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
 
 <script src="/boot_admin/vendor/autocomplete/jquery-1.12.4.js"></script>
  <script src="/boot_admin/vendor/autocomplete/jquery-ui.js"></script>


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
$sql="SELECT * FROM logbook ORDER BY Date ASC";
 $qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	
	if(isset($_POST['submit'])){ 
	$start_da=$_POST['start_date'];
	$end_da=$_POST['end_date'];
	$sql="SELECT * FROM logbook WHERE Date BETWEEN '$start_da' AND '$end_da' ORDER BY Date ASC";
	$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	}
	
	if(isset($_POST['submit1'])){
		$sitename=$_POST['site_name'];
		$sql='SELECT * FROM `logbook` where SITE_NAME LIKE "%'.$sitename.'%" ORDER BY Date ASC';
		$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	 
		}
		
	if(isset($_POST['submit2'])){
		$des=$_POST['descript'];
		$d=$_POST['date'];
		$name=$_POST['Site_Name'];
		if(isset($_POST['checked'])){$checked=1;}
		else $checked=0;
		$conn = mysqli_connect("localhost", "root", "","tower_project");
		$sql="insert into logbook(Date,SITE_NAME,Descr,Highlighter)
		values('$d','$name','$des','$checked')";
		$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
		echo "successfully inserted";
		$sql='SELECT * FROM logbook ORDER BY Date DESC';
		$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	}
	
	
?>


<div class="panel panel-default">
<!-- /.panel-heading -->
<div class="panel-body">
	<!-- Nav tabs -->
	
	<ul class="nav nav-pills" id="nav1">
		<li>
	<h3> LogBook </h3>
        </li>
	<li>
	<a href="/work_user.php"><button type="button" class="btn btn-outline btn-primary">Home</button></a>
        </li>
	<li>
	<a href="javascript:hide() "><button type="button" class="btn btn-outline btn-success">Print</button></a>
        </li>
	<li>
        </li>
        <li ><a href="#home-pills" style="font-size:14pt;font-weight:bold;" data-toggle="tab">View</a>
        </li>
        <li><a href="#profile-pills" style="font-size:14pt;font-weight:bold;" data-toggle="tab">New Entry</a>
        </li>             
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
        <div class="tab-pane fade in active" id="home-pills">						
        <p>
        <!-- /.row -->
	<div class="row">
        <div class="col-lg-12">
        <div class="panel panel-default">
		<!-- /.panel-heading -->
		<div class="panel-body">
		
		<div id="bottom" width="80%" height="800">
		</div>
		<div>
		<p>

		<form  action="" method="post" id="search_box">
			<input type="date" name="start_date">
			<input type="date" name="end_date">
			<input type="submit" name="submit" value="Search" >
			&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="site_name" placeholder="Enter SiteName">
			<input type="submit" name="submit1" value="Search / Refresh" >
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<a href="#bottom_page"> Bottom </a>
		</form>
		</p>
		</div>
		    <table width="100%" cellpadding="1" cellspacing="0" border="5" bordercolor="#ccddff" id="dataTables-example">
			<thead>
			    <tr height="25">
				<th  width="15%" align="center" hidden >Date</th>
				<th  width="15%" align="center" >Date</th>
				<th  width="15%" align="center" >Site_Name</th>
				<th  width="70%" align="center" >Description</th>
			    </tr>
			</thead>
		<?php
		while($row=mysqli_fetch_array($qry)){
		echo "<tr>";
		$source = $row['Date'];
		$date1 = new DateTime($source);
		$st = $date1->format('d-m-Y');
		//echo "<td align='center' >".$date1->format('d.m.Y')."</td>";
		//echo "<td align='center' >".$newDate."</td>";
		echo "<td align='center' hidden>".$row['Date']."</td>";
		echo "<td align='center' >".$st."</td>";
		echo "<td align='left' >".$row['SITE_NAME']."</td>";
		if($row['Highlighter']==1)
		{echo "<td align='left' style='color:red'>".$row['Descr']."</td> </tr>";}
		else echo "<td align='left'>".$row['Descr']."</td> </tr>";
		}
		?>
		  
		    </table>
		    <!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
	</div>
	</p>
	</div>
    <!-- /.row -->
	<div class="tab-pane fade" id="profile-pills">
		<p>
		<form method="post" action="" name="form2" id="divright" onsubmit="return validation()">
		<table class="tab">
		<tr><td>Date:</td><td><input type="date" name="date" id="amt" /><span id="error2" style="color:red"></span></td></tr>
		<tr><td>Highlight:</td><td><input type="checkbox" name="checked" ><td></tr>
		<tr><td>Site Name:</td><td><input type="text" name="Site_Name" id="tags" /><span id="error1" style="color:red"></span></td></tr>
		<tr><td>Description:</td><td><textarea id="des" type="text" name="descript"  rows="4" cols="80"></textarea></td></tr>
		<tr><td></td><td align="center"><input type="submit" name="submit2" value="set" class="submit" /></td></tr>
		</table>
		</form>
		</p>
	</div>

	  <?php
   $conn = mysqli_connect("localhost","root","sai_ram321#","tower_project") or die("can't connect");
  //$term=$_GET['tags'];
  $sql="SELECT * FROM first";
  $qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
 	
  while($row=mysqli_fetch_array($qry)){
	 //array_push($json, $row['SITE_NAME']);
	 $json_arr1[]=$row['SiteName'];
  }
 // echo json_encode($json_arr1);
  ?>
 

 
    <!-- jQuery -->
   <!--- <script src="/boot_admin/vendor/jquery/jquery.min.js"></script> -->

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
        aLengthMenu: [
		[25, 50, 100, 200, -1],
		[25, 50, 100, 200, "All"]
		],
		iDisplayLength: -1,responsive: true,
		"aaSorting": []
        });
		
    });
    
    function hide(){
    var link = document.getElementById('nav1');
    var link1 = document.getElementById('search_box');
    link.style.visibility = 'hidden';
    link1.style.visibility = 'hidden';
    window.print();
	link.style.visibility = 'visible';
    link1.style.visibility = 'visible';
    }
		
	
	$(function() {
	 var jArray =<?php echo json_encode($json_arr1) ?>;
		console.log("array is:");
		//console.log(jArray);
		//alert(jArray);
		//document.write(jArray);
          $("#tags").autocomplete({
			  source:jArray,
		  minLength:1});    
 });
    </script>
	
		
  <script type="text/javascript">
 	   
 function validation(){
	 var d=document.forms["form2"]["amt"].value;
	 var site=document.forms["form2"]["Site_Name"].value;
	 console.log(d);
	 console.log(site);
	 if(site==""){
		 document.getElementById('error1').innerText='Please Enter SiteName*';
		 return false;
	 }
	 if(d==""){
		 document.getElementById('error2').innerText='please Enter date*';
		 return false;
	 }
	 else return true;
 }
  </script>

</div>
<h4 align="right"> <a href="#top"> Top </a> </h4>
</div>
</div>
<a name="bottom_page"/>
</body>

</html>