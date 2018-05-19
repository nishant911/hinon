<?php
include 'dbconnection.php';
$con = OpenCon();

$upload_image = $_FILES['upload_image']['name'];
$temp = $_FILES['upload_image']['tmp_name'];
$locator = "websitecontent/" . $upload_image;

$created_at = date('Y-m-d H:i:s');

$query = "insert into clients (upload_image, created_at) values ('$upload_image', '$created_at')";
$result = mysqli_query($con, $query);

if (! $result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

move_uploaded_file($temp, $locator);

if ($result) {
    header("location:admin_clients.php");
}

?>	 