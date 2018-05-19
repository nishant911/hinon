<?php
include 'dbconnection.php';
$con = OpenCon();

$name = $_POST['name'];
$designation = $_POST['designation'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];

$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];
$locator = "websitecontent/" . $image;

$created_at = date('Y-m-d H:i:s');

$query = "insert into team (name, designation, phone_number, email, image, created_at) values ('$name', '$designation',  '$phone_number', '$email', '$image', '$created_at')";
$result = mysqli_query($con, $query);

if (! $result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

move_uploaded_file($temp, $locator);

if ($result) {
    header("location:admin_team.php");
}

?>	 