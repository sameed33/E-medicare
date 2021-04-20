<?php

include "connect.php";

if(isset($_POST['signup']))
{ 
	$shopname=$_POST['shopname'];
	$location=$_POST['location'];
	$contact=$_POST['contact'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conpassword = $_POST['conpassword'];
 

  $query="INSERT INTO shopdetails(name,location,contact,email,password) values('$shopname','$location','$contact','$email','$password')";
  
  $query1="select email from shopdetails where email ='$email'";
  $query2="select * from shopdetails where email ='$email' && password='$password'";

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
    $_SESSION['shopid'] = $object->shopid;

     header("refresh:5; url=shopindex.php");
  }
   else
    {
     echo "<script> alert('Username is already taken...')</script>";
     header("refresh:5; url=shopsignup.php");
    }
  }
  else
    {
     echo "<script> alert('Password does not match')</script>";
     header("refresh:0; url=shopsignup.php");
    }
  }
}

  else
{
  echo "POST is not set!";
}

?>