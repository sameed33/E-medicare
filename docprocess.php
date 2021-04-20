<?php

include "connect.php";

if(isset($_POST['submit']))
{ 
	$drname=$_POST['drname'];
	$contact=$_POST['contact'];
	$spec=$_POST['spec'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$conpassword = $_POST['conpassword'];
	$location1=$_POST['location1'];
	$location2=$_POST['location2'];
 

  $query="INSERT INTO doctordetails(drname,contact,spec,email,password,conpassword,location1,location2) values('$drname','$contact','$spec','$email','$password','$conpassword','$location1','$location2')";
  
  $query1="select email from doctordetails where email ='$email'";
  $query2="select * from doctordetails where email ='$email' && password='$password'";

  $search=mysqli_query($conn,$query1);
  
  if($password == $conpassword)
  {
  if($search->num_rows==0)
  {
    $data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('Account created successfully')</script>";
    // $query2="select docid from logidetails where username ='$username' && password='$password'";
    $q2=mysqli_query($conn,$query2);
    $object = $q2->fetch_object();
    $_SESSION['docid'] = $object->docid;

     header("refresh:0; url=docindex.php");
  }
   else
    {
     echo "<script> alert('...')</script>";
     header("refresh:0; url=docsignup.php");
    }
  }
  else
    {
     echo "<script> alert('Password does not match')</script>";
     header("refresh:0; url=docsignup.php");
    }
  }
}


else if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$query="select * from doctordetails where email='$email' && password='$password'";
$data=mysqli_query($conn,$query);
if($data->num_rows==1)
{
	$object = $data->fetch_object();
    $_SESSION['docid'] = $object->docid;
    echo "<script>alert('Login successfully')</script>";
    header("refresh:0; url=docindex.php");
}
else
{
	echo "<script> alert('Invalid Credentials')</script>";
     header("refresh:5; url=doclogin.php");
}

}

else
{
  echo "POST is not set!";
}

?>