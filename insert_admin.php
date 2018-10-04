<?php
$conn=mysqli_connect("localhost", "root", "sai_ram321#","tower_project");
if(isset($_POST['add'])){
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$Email=$_POST['email'];
	$contactNo=$_POST['contact_no'];
	if(isset($_POST['logbook'])){$logbook=TRUE;}
	else $logbook=FALSE;
	if(isset($_POST['new_entry'])){$entry=TRUE;}
	else $entry=FALSE;
	if(isset($_POST['edit'])){$edit=TRUE;}
	else $edit=FALSE;
	$sql1="INSERT INTO user(`FirstName`, `LastName`, `Email`, `ContactNumber`,`userType`,`logbook`,`new_entry`,`edit`) VALUES('$fname','$lname','$Email','$contactNo',1,'$logbook','$entry','$edit')";
	$qry1=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	echo"inserted sucessfully";
}

if(isset($_POST['remove'])){
	$username=$_POST['r_username'];
	$contactno=$_POST['r_contactno'];
	
	$sql2="DELETE FROM user WHERE ContactNumber='".$contactno."'";
	$qry2=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
}

header("Location:adminpage.php"); 
?>