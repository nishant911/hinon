<?php
include 'dbconnection.php';
$con = OpenCon();

$our_services_main_heading = $_POST['our_services_main_heading'];
$our_services_heading = $_POST['our_services_heading'];
$our_services_content = $_POST['our_services_content'];

$upload_image = $_FILES['upload_image']['name'];
$temp = $_FILES['upload_image']['tmp_name'];
$locator = "websitecontent/" . $upload_image;

$created_at = date('Y-m-d H:i:s');

$query = "insert into our_services (our_services_main_heading, our_services_heading, our_services_content,  upload_image, created_at) values ('$our_services_main_heading', '$our_services_heading', '$our_services_content', '$upload_image', '$created_at')";
$result = mysqli_query($con, $query);

if (! $result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

move_uploaded_file($temp, $locator);

if ($result) {
    header("location:admin_home_page.php");
}

?>	 