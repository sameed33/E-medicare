<?php

include "connect.php";
session_start();
if(isset($_POST['signup']))
{ 
	$hospname=$_POST['hospname'];
	$location=$_POST['location'];
	$contact=$_POST['contact'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conpassword = $_POST['conpassword'];
 

  $query="INSERT INTO hospitaldetails(name,location,contact,email,password) values('$hospname','$location','$contact','$email','$password')";
  
  $query1="select email from hospitaldetails where email ='$email'";
  $query2="select * from hospitaldetails where email ='$email' && password='$password'";

  $search=mysqli_query($conn,$query1);
  
  if($password == $conpassword)
  {
  if($search->num_rows==0)
  {
    $data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('Account created successfully')</script>";
    // $query2="select uid from login_details where username ='$username' && password='$password'";
    $q2=mysqli_query($conn,$query2);
    $object = $q2->fetch_object();
    $_SESSION['hospid'] = $object->hospid;

     header("refresh:0; url=hospital/hospindex.php");
  }
   else
    {
     echo "<script> alert('Username is already taken...')</script>";
     header("refresh:0; url=hospsignup.php");
    }
  }
  else
    {
     echo "<script> alert('Password does not match')</script>";
     header("refresh:0; url=hospsignup.php");
    }
  }
}


else if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$query="select * from hospitaldetails where email='$email' && password='$password'";
$data=mysqli_query($conn,$query);
if($data->num_rows==1)
{
	$object = $data->fetch_object();
    $_SESSION['hospid'] = $object->hospid;
    echo "<script>alert('Login successfully')</script>";
    header("refresh:0; url=hospital/hospindex.php");
}
else
{
	echo "<script> alert('Invalid Credentials')</script>";
     header("refresh:5; url=hosplogin.php");
}

}

else
{
  echo "POST is not set!";
}

?>