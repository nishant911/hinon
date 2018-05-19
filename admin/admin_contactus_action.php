<?php
include 'dbconnection.php';
$con = OpenCon();

$address = $_POST['address'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];

$created_at = date('Y-m-d H:i:s');

$query = "insert into contactus (address, email,   phone_number, created_at) values ('$address', '$email', '$phone_number', '$created_at')";
$result = mysqli_query($con, $query);

if (! $result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

if ($result) {
    header("location:admin_contactus.php");
}

?>	 