
<html>
<head><title>Login Page</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/boot_admin/vendor/bootstrap/css/bootstrap.css">
  <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>
  <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<?php  session_start();   // session starts with the help of this function 
?>

<?php
if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $admin = $_POST['admin'];
     $admin_pass = $_POST['admin_password'];
	  $conn =mysqli_connect("localhost", "root","sai_ram321#","tower_project");
	   $query="SELECT * FROM user WHERE userType=0";
       $result=mysqli_query($conn,$query)or die(mysqli_error($conn));
	   $row=mysqli_fetch_array($result);
	   $db_admin=$row['Email'];
	   $db_adminpass=$row['ContactNumber'];
      if($admin == $db_admin && $admin_pass == $db_adminpass)  // username is  set to "Ank"  and Password   
         {                                      
				$_SESSION['admin_use']=$admin;
				$_SESSION['admin_pass']=$admin_pass;
			if($_SESSION['admin_use']==$admin)   // Checking whether the session is already there or not if 
												// true then header redirect it to the home page directly 
				{
				
				header("Location:work_admin.php"); 
				}
 
         //echo '<script type="text/javascript"> window.open("work.php","_self");</script>';  //  On Successful Login redirects to home.php
        }
        else
        {
            echo "invalid UserName or Password";        
        }
}

 else if(isset($_POST['user_login']))   // it checks whether the user clicked login button or not 
{
		$user = $_POST['username'];
     $user_pass = $_POST['user_password'];
	 
      $conn =mysqli_connect("localhost", "root","sai_ram321#","tower_project");
   
        $query="SELECT * FROM user";
        $result=mysqli_query($conn,$query)or die(mysqli_error($conn));
		while($row=mysqli_fetch_array($result)){
		$dbfirstname=$row['FirstName'];
		$dblastname=$row['LastName'];
		$usertype=$row['userType'];
		$contactNo=$row['ContactNumber'];
		$email=$row['Email'];
		$logbook=$row['logbook'];
		$edit=$row['edit'];
		$new_entry=$row['new_entry'];
		echo $logbook;
		if($user == $email && $user_pass ==$contactNo)  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     
		  $_SESSION['user_use']=$usertype;
		  if($_SESSION['user_use']==1)   // Checking whether the session is already there or not if 									// true then header redirect it to the home page directly 
			{
				$_SESSION['varname'] = $dbfirstname;
				$_SESSION['varpass'] = $dblastname;
				$_SESSION['varcontact'] = $contactNo;
				$_SESSION['varemail'] = $email;
				$_SESSION['varlog']=$logbook;
				$_SESSION['varedit']=$edit;
				$_SESSION['varnew']=$new_entry;
			header("Location:work_user.php"); 
			}
        // echo '<script type="text/javascript"> window.open("work.php","_self");</script>';  //  On Successful Login redirects to home.php
        }
        else
        {
            echo "invalid UserName or Password";        
        }
		}	
}
else {}
 
 
 /*
 if(isset($_SESSION['user_use']))   // Checking whether the session is already there or not if 
                             // true then header redirect it to the home page directly 
 {
    header("Location:work.php"); 
 }
 */
 ?>
<div class="container">
	<div class="row">
        <div class="span12">
    		<div class="" id="loginModal">
              <div class="modal-header">
                <h3 align="center">"SRI SAI RAM ENGINEERING WORKS"</h3>
              </div>
              <div class="modal-body">
                <div class="well">
                  <ul class="nav nav-pills">
                    <li class="active"><a href="#admin" data-toggle="tab">Admin Login</a></li>
                    <li><a href="#user" data-toggle="tab">User Login</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="admin">
                      <form class="form-horizontal" method="POST" action="" name="myForm">
                        <fieldset>   
                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Username</label>
                            <div class="controls">
                              <input type="text" id="username" name="admin" placeholder="" class="input-xlarge">
                            </div>
                          </div>
     
                          <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                              <input type="password" id="password" name="admin_password" placeholder="" class="input-xlarge">
                            </div>
                          </div>
     
                          <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                              <button class="btn btn-success" name="login">Login</button>
                            </div>
                          </div>
                        </fieldset>
                      </form>                
                    </div>
                    <div class="tab-pane fade" id="user">
                     <form id="tab"  method="post" action="" >
                        <fieldset>   
                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Username</label>
                            <div class="controls">
                              <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                            </div>
                          </div>
     
                          <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                              <input type="password" id="password" name="user_password" placeholder="" class="input-xlarge">
                            </div>
                          </div>
     
                          <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                              <button class="btn btn-success" name="user_login">Login</button>
                            </div>
                          </div>
                        </fieldset>
                     </form>
                    </div>
                </div>
              </div>
            </div>
        </div>
	</div>
</div>
</body>
<!-- <script type="text/javascript"> 
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
	var y=document.forms["myForm"]["password"].value;
    if (x == ""||y=="") {
        alert("Please enter User Name and password");
        return false;
    }
	else if(x!="1234")
	{alert("incorrect User Name or password");
	return false;}
	else return true;
} 
</script> -->
</html>