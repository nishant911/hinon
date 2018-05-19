<?php
include 'dbconnection.php';
$con = OpenCon();

$heading1 = $_POST['heading1'];
$content1 = $_POST['content1'];
$heading2 = $_POST['heading2'];
$content2 = $_POST['content2'];
$heading3 = $_POST['heading3'];
$content3 = $_POST['content3'];
$heading4 = $_POST['heading4'];
$content4 = $_POST['content4'];

$created_at = date('Y-m-d H:i:s');

$query = "insert into aboutus (heading1, content1, heading2, content2, heading3, content3, heading4, content4, created_at) values ('$heading1', '$content1', '$heading2', '$content2', '$heading3', '$content3', '$heading4', '$content4', '$created_at')";
$result = mysqli_query($con, $query);

if (! $result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

if ($result) {
    header("location:admin_about_us.php");
}

?>	 