<?php

include "../connect.php";
session_start();
if(isset($_POST['add']))
{ 

	$hospid = $_SESSION['hospid'];

	$dname=$_POST['dname'];
	$group=$_POST['group'];
	$amount=$_POST['amount'];
	$contact=$_POST['contact'];

	
	$query2="insert into donordetails(name,contact,bgroup,hospid) values('$dname','$contact','$group','$hospid')";

	$select="select * from bloodbank where bgroup='$group' && hospid='$hospid'";
	$select1="select name from donordetails where contact='$contact' && bgroup='$group' && hospid='$hospid'";

	$data=mysqli_query($conn, $select);
	if($data->num_rows==0)
	{
		$query="insert into bloodbank(bgroup,amount,hospid) values('$group','$amount','$hospid')";
		$insert=mysqli_query($conn,$query);
		if($insert)
		{
			$data1=mysqli_query($conn, $select1);
			if($data1->num_rows==0)
			{
				$insert1=mysqli_query($conn,$query2);
			}	
			echo "<script>alert('Data inserted successfully')</script>";
    		header("refresh:0; url=hospindex.php");
		}
		else
		{
			echo "<script>alert('Something went wrong... Please try again')</script>";
    		header("refresh:0; url=addblood.php");
		}
	}
	else
	{
		$object=$data->fetch_object();
		$amount1=$amount + $object->amount;
	
		$query="update bloodbank set amount='$amount1' where bgroup='$group' && hospid='$hospid'";
		$update=mysqli_query($conn,$query);
		if($update)
		{
			$data1=mysqli_query($conn, $select1);
			if($data1->num_rows==0)
			{
				$insert1=mysqli_query($conn,$query2);
			}	
			echo "<script>alert('Data inserted successfully')</script>";
    		header("refresh:0; url=hospindex.php");
		}
		else
		{
			echo "<script>alert('Something went wrong... Please try again')</script>";
    		header("refresh:0; url=addblood.php");
		}

	}

}

else if(isset($_POST['approverequest']))
{ 
	$id=$_POST['id'];
	$hospid = $_POST['hospid'];
	$amount = $_POST['amount'];
	$bgroup = $_POST['bgroup'];
	$a=null;

	$q="select * from bloodbank where bgroup='$bgroup' && hospid='$hospid'";
	$q2=mysqli_query($conn,$q);
    $object = $q2->fetch_object();
    $a = $object->amount;

    if($a>$amount)
    {
    $a=$a-$amount;
	$query="update bloodbank set amount='$a' where bgroup='$bgroup' && hospid='$hospid'";
	$query1="update bloodrequest set status=1 where id='$id'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		$data1=mysqli_query($conn,$query1);
		if($data1)
		{
		echo "<script>alert('Request approved successfully')</script>";
    	header("refresh:0; url=viewbloodrequests.php");
    	}
	}
	else
	{
		echo "<script>alert('Something went wrong... Please try again')</script>";
    	header("refresh:0; url=viewbloodrequests.php");
	}
	}
	else
	{
		echo "<script>alert('Insufficient blood storage')</script>";
    	header("refresh:0; url=viewbloodrequests.php");	
	}
}

else if(isset($_POST['cancelrequest']))
{ 
	$id=$_POST['id'];
    $query="UPDATE bloodrequest SET status=2 where id='$id'";
    $data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('Request cancelled successfully)</script>";
    header("refresh:0; url=viewbloodrequests.php");
    }
    else {
     echo "<script> alert('Something Went Wrong... Please try again')</script>";
     header("refresh:5; url=viewbloodrequests.php");
	}
}
else
{
  echo "POST is not set!";
}

?>