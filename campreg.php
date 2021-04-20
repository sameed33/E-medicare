<?php

include 'connect.php';
session_start();

if(isset($_POST['submit']))
{ 
	
	$campid = $_SESSION['campid'];
	$campname=$_POST['campname'];
	$orgname=$_POST['orgname'];
	$campdes=$_POST['campdes'];
	$date=$_POST['date'];
	$email = $_POST['email'];
	$location=$_POST['location'];
	$contact=$_POST['contact'];
   

 $sql=" INSERT INTO campreg(campid,campname,orgname,campdes,date,email,location,contact) VALUES ('$campid','$campname','$orgname','$campdes','$date','$email','$location','$contact')";
	
	if($conn->query($sql))
							{
								
								
								echo "<script> alert('Success...')</script>";
								header("refresh:0; url=campindex.php");
								
							}
  
  
}



?>
