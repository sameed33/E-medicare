<?php 


if(isset($_POST['valueToSearch']))
{
    $valueToSearch = $_post['valueToSearch'];
    $query = "SELECT * FROM `hospitaldetails` WHERE CONCAT (`hospid`, `name`, `location`, `contact`, `email`, `password`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}

else {

$query = "SELECT * FROM `hospitaldetails`";
$search_result = filterTable($query);

}

function filterTable($query)
{

    $connect = mysqli_connect("localhost", "root", "", "medicare");
    $filter_result = mysqli_query($connect, $query);
    return $filter_result;

}

?>


