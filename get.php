
  <?php
  $conn = mysqli_connect("localhost","root","","tower_project") or die("can't connect");
  $term=$_GET['tags'];
  $sql="SELECT * FROM wo_stage";
  $qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
 	
  while($row=mysqli_fetch_array($qry)){
	 //array_push($json, $row['SITE_NAME']);
	 $json[]=$row['wo_stname'];
  }
  echo json_encode($json);
  ?>
 