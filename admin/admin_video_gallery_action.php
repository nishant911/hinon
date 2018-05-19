<?php
include 'dbconnection.php';
$con = OpenCon();

$video_caption = $_POST['video_caption'];
$video_link = $_POST['video_link'];

$created_at = date('Y-m-d H:i:s');

$query = "insert into video_gallery (video_caption, video_link, created_at) values ('$video_caption', '$video_link', '$created_at')";
$result = mysqli_query($con, $query);

if (! $result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

if ($result) {
    
    header("location:admin_video_gallery.php");
}

?>	 