<?php

include "connect.php";
session_start();
if(isset($_POST['signup']))
{ 
	$username=$_POST['username'];
	$location=$_POST['location'];
	$contact=$_POST['contact'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conpassword = $_POST['conpassword'];
 

  $query="INSERT INTO userdetails(name,location,contact,email,password) values('$username','$location','$contact','$email','$password')";
  
  $query1="select email from useretails where email ='$email'";
  $query2="select * from userdetails where email ='$email' && password='$password'";

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
    $_SESSION['userid'] = $object->userid;

     header("refresh:0; url=userindex.php");
  }
   else
    {
     echo "<script> alert('Username is already taken...')</script>";
     header("refresh:0; url=usersignup.php");
    }
  }
  else
    {
     echo "<script> alert('Password does not match')</script>";
     header("refresh:0; url=usersignup.php");
    }
  }
}


else if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$query="select * from userdetails where email='$email' && password='$password'";
$data=mysqli_query($conn,$query);
if($data->num_rows==1)
{
	$object = $data->fetch_object();
    $_SESSION['userid'] = $object->userid;
    echo "<script>alert('Login successfully')</script>";
    header("refresh:0; url=userindex.php");
}
else
{
	echo "<script> alert('Invalid Credentials')</script>";
     header("refresh:5; url=userlogin.php");
}

}

else if(isset($_POST['requestblood']))
{
$amount = $_SESSION['amount'];
$amount1 = $_POST['amount1'];
$userid = $_SESSION['userid'];
$hospid = $_SESSION['hospid'];
$bgroup = $_SESSION['bgroup'];

if($amount>=$amount1)
{
    $query="insert into bloodrequest(amount,userid,status,bgroup,hospid) values('$amount1','$userid',0,'$bgroup','$hospid')";
    $data=mysqli_query($conn,$query);
    if($data)
    {
    echo "<script>alert('Request placed successfully')</script>";
    header("refresh:0; url=hospdash.php");
    }
    else
    {
    echo "<script>alert('Something went wrong... Try again')</script>";
    header("refresh:0; url=requestform.php");
    }
}
else
{
  echo "<script> alert('Insufficient Blood amount to place order...Invalid request')</script>";
  header("refresh:0; url=requestform.php"); 
}
}

else if(isset($_POST['cancelrequest']))
{
    $id = $_POST['id'];

    $query="update bloodrequest set status=2 where id='$id'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
    echo "<script>alert('Request cancelled successfully')</script>";
    header("refresh:0; url=hospdash.php");
    }
    else
    {
    echo "<script>alert('Something went wrong... Try again')</script>";
    header("refresh:0; url=trackrequest.php");
    }
}

else
{
  echo "POST is not set!";
}

?>