<?php
include 'dbconnection.php';
$con = OpenCon();

$our_mission_heading = $_POST['our_mission_heading'];
$our_mission_content = $_POST['our_mission_content'];

$created_at = date('Y-m-d H:i:s');

$query = "insert into our_mission (our_mission_heading, our_mission_content, created_at) values ('$our_mission_heading', '$our_mission_content', '$created_at')";
$result = mysqli_query($con, $query);

if (! $result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

if ($result) {
    header("location:admin_home_page.php");
}

?>	 