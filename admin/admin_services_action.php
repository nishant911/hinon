<?php
include 'dbconnection.php';
$con = OpenCon();

$heading = $_POST['heading'];
$content = $_POST['content'];

$created_at = date('Y-m-d H:i:s');

$query = "insert into services (heading, content,  created_at) values ('$heading', '$content', '$created_at')";
$result = mysqli_query($con, $query);

if (! $result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

if ($result) {
    header("location:admin_services.php");
}

?>	 