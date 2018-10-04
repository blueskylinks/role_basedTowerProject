
<?php   session_start();  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="/boot_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/boot_admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/boot_admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/boot_admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/boot_admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
        <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
	var st_1 = document.getElementById('stage_n1').value;
	var st_2 = document.getElementById('stage_n2').value;
	var st_3 = document.getElementById('stage_n3').value;
	var st_4 = document.getElementById('stage_n4').value;
	var st_5 = document.getElementById('stage_n5').value;
	var st_6 = document.getElementById('stage_n6').value;
	var st_7 = document.getElementById('stage_n7').value;
	var st_8 = document.getElementById('stage_n8').value;
        data.addRows([
          ['Inspection', Number(st_1)],
          ['Foundation', Number(st_2)],
          ['Errection', Number(st_3)], 
          ['Comissioning', Number(st_4)], 
	  ['Maintenance', Number(st_5)], 
	  ['De-Errection', Number(st_6)], 
	  ['Goods', Number(st_7)], 
	  ['Invoice', Number(st_8)], 
        ]);

        // Set chart options
        var options = { 
  'width':600,
  'height':400};
 
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

        function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var topping = data.getValue(selectedItem.row, 0);
			localStorage.setItem("stage_key",topping);
			window.location.href="new_show_1.php";
            //alert('The user selected ' + topping);
          }
        }

        google.visualization.events.addListener(chart, 'select', selectHandler);    
        chart.draw(data, options);
      }

    </script>
	

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

    <div id="wrapper">

       
<nav class="navbar navbar-inverse">
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
      <li ><a href="show_user.php"><button class="btn btn-danger navbar-btn" >&emsp;&nbspView&emsp;&nbsp&nbsp</button></a></li>
      <li><a href="search_user.php"><button class="btn btn-danger navbar-btn">&emsp;&nbspFilter&emsp;&nbsp&nbsp</button></a></li>
	  <?php if($row1['edit']==1){ 
      echo '<li><a href="edit_user.php"><button class="btn btn-danger navbar-btn">&emsp;&nbsp&nbspEdit&emsp;&nbsp&nbsp&nbsp</button></a></li> ';}
	  else{ echo '<li><a href="edit_user.php"><button class="btn btn-danger navbar-btn" disabled>&emsp;&nbsp&nbspEdit&emsp;&nbsp&nbsp&nbsp</button></a></li> '; }?>
      <?php if($row1['logbook']==1){
	  echo '<li class="active"><a href="lbsearch.php"><button class="btn btn-danger navbar-btn" >&nbspLog Book&nbsp&nbsp</button></a></li>';}  
	  else {echo '<li class="active"><a href="lbsearch.php"><button class="btn btn-danger navbar-btn" disabled>&nbspLog Book&nbsp&nbsp</button></a></li>';} ?>
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
	$conn =mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
	//Total Sum
	$sq="SELECT COUNT(stage) FROM first ";
	$qr=mysqli_query($conn,$sq)or die(mysqli_error($conn));
	$sum=mysqli_fetch_array($qr);
	$count=$sum[0];
	//echo $count;
		
	
	//Inspection stage
	$sql="SELECT COUNT(stage) FROM first WHERE stage='Inspection' ";
	$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	$row=mysqli_fetch_array($qry);
	$inspection=$row[0];
	$inspection_per=$inspection/$count*100;
	//echo $inspection_per;
	
	//Foundation
	$sql1="SELECT COUNT(stage) FROM first WHERE stage='Foundation'";
	$qry1=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	$row1=mysqli_fetch_array($qry1);
	$foundation=$row1[0];
	
	//Errection
	$sql2="SELECT COUNT(stage) FROM first WHERE stage='Errection'";
	$qry2=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
	$row2=mysqli_fetch_array($qry2);
	$errection=$row2[0];
	
	//Comissioning
	$sql3="SELECT COUNT(stage) FROM first WHERE stage='Comissioning'";
	$qry3=mysqli_query($conn,$sql3)or die(mysqli_error($conn));
	$row3=mysqli_fetch_array($qry3);
	$comissioning=$row3[0];
	
	//Maintenance
	$sql4="SELECT COUNT(stage) FROM first WHERE stage='Maintenance'  ";
	$qry4=mysqli_query($conn,$sql4)or die(mysqli_error($conn));
	$row4=mysqli_fetch_array($qry4);
	$maintenance=$row4[0];
	
	//De-Errection
	$sql5="SELECT COUNT(stage) FROM first WHERE stage='De-Errection' ";
	$qry5=mysqli_query($conn,$sql5)or die(mysqli_error($conn));
	$row5=mysqli_fetch_array($qry5);
	$deErrection=$row5[0];
	
	//Goods
	$sql6="SELECT COUNT(stage) FROM first WHERE stage='Goods'  ";
	$qry6=mysqli_query($conn,$sql6)or die(mysqli_error($conn));
	$row6=mysqli_fetch_array($qry6);
	$goods=$row6[0];
	
	//Invoice	
	$sql7="SELECT COUNT(stage) FROM first WHERE stage='Invoice' ";
	$qry7=mysqli_query($conn,$sql7)or die(mysqli_error($conn));
	$row7=mysqli_fetch_array($qry7);
	$invoice=$row7[0];
	$invoice_per=$invoice/$count*100;
	//echo $invoice;
	?>

	
	<input name="stage_n1" id="stage_n1" type="hidden" value="<?php echo $inspection; ?>"/>
	<input name="stage_n2" id="stage_n2" type="hidden" value="<?php echo $foundation; ?>"/>
	<input name="stage_n3" id="stage_n3" type="hidden" value="<?php echo $errection; ?>"/>
	<input name="stage_n4" id="stage_n4" type="hidden" value="<?php echo $comissioning; ?>"/>
	<input name="stage_n5" id="stage_n5" type="hidden" value="<?php echo $maintenance; ?>"/>
	<input name="stage_n6" id="stage_n6" type="hidden" value="<?php echo $deErrection; ?>"/>
	<input name="stage_n7" id="stage_n7" type="hidden" value="<?php echo $goods; ?>"/>
	<input name="stage_n8" id="stage_n8" type="hidden" value="<?php echo $invoice; ?>"/>
	
	<div class="panel-body">
	<div class="container">
        <!-- /.row -->
        <div class="row" width="80%">   
		<div class="col-lg-3 col-md-6">
		<div id="chart_div"></div>
		</div>
		
		<div class="col-lg-3 col-md-6">
		
		</div>
                <div class="col-lg-3 col-md-6">
                    <div style="background:  #f30615 " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $inspection; ?></div>
                                    <div>Inspection</div>
                                </div>
                            </div>
                        </div>
                        <a href="show.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
         
               
                <div class="col-lg-3 col-md-6">
                    <div style="background:   #f33106  " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $foundation; ?></div>
                                    <div>Foundation</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
		<div class="col-lg-3 col-md-6">
		
		</div>		
               
                <div class="col-lg-3 col-md-6">
                    <div style="background:   #f7610c   " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $errection; ?></div>
                                    <div>Errection</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
				
			
                <div class="col-lg-3 col-md-6">
                    <div style="background:   #f39c16    " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $comissioning; ?></div>
                                    <div>Commissioning</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
		
		<div class="col-lg-3 col-md-6">
		
		</div>	
		<div class="col-lg-3 col-md-6">
                    <div style="background:    #efe111     " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $maintenance; ?></div>
                                    <div>Maintainance</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
		
		
		<div class="col-lg-3 col-md-6">
                     <div style="background:  #9eef11  " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $deErrection; ?></div>
                                    <div>De-Errection</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
		
		<div class="col-lg-3 col-md-6">
		
		</div>	
		<div class="col-lg-3 col-md-6">
		
		</div>	
		
		                <div class="col-lg-3 col-md-6">
                    <div style="background:   #61f70c  " class="panel panel" >                
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $goods; ?></div>
                                    <div>Goods</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
			 
               
                <div class="col-lg-3 col-md-6">
                      <div style="background:  #126d19  " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $invoice; ?></div>
                                    <div>Invoice</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
	</div>
	</div>
	</div>		
				
						
		
		
		</div>
		</div>
	
		
		
      <!-- jQuery -->
    <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/boot_admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="/boot_admin/vendor/flot/excanvas.min.js"></script>
    <script src="/boot_admin/vendor/flot/jquery.flot.js"></script>
    <script src="/boot_admin/vendor/flot/jquery.flot.pie.js"></script>
    <script src="/boot_admin/vendor/flot/jquery.flot.resize.js"></script>
    <script src="/boot_admin/vendor/flot/jquery.flot.time.js"></script>
    <script src="/boot_admin/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="/boot_admin/data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/boot_admin/dist/js/sb-admin-2.js"></script>



</body>

</html>