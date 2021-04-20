<?php 

include("connect.php");
$query = "INSERT INTO `hospitaldetails` (`hospid`, `name`, `location`, `contact`, `email`, `password`) VALUES
";

mysqli_query ($conn,$query);


?>
