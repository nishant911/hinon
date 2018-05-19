<?php
include 'dbconnection.php';
$con = OpenCon();

$welcome_heading = $_POST['welcome_heading'];
$welcome_content1 = $_POST['welcome_content1'];
$welcome_content2 = $_POST['welcome_content2'];

$created_at = date('Y-m-d H:i:s');

$query = "insert into welcome_content (welcome_heading, welcome_content1, welcome_content2, created_at) values ('$welcome_heading', '$welcome_content1', '$welcome_content2', '$created_at')";
$result = mysqli_query($con, $query);

if (! $result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

if ($result) {
    header("location:admin_home_page.php");
}

?>	 