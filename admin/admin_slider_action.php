<?php
include 'dbconnection.php';
$con = OpenCon();

$slider_heading1 = $_POST['slider_heading1'];
$slider_heading2 = $_POST['slider_heading2'];
$slider_content = $_POST['slider_content'];

$created_at = date('Y-m-d H:i:s');

$query = "insert into slider_content (slider_heading1, slider_heading2, slider_content, created_at) values ('$slider_heading1', '$slider_heading2', '$slider_content', '$created_at')";
$result = mysqli_query($con, $query);

if (! $result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

if ($result) {
    header("location:admin_home_page.php");
}

?>	 