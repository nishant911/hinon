<?php
include 'dbconnection.php';
$con = OpenCon();

if (isset($_POST['delete'])) {
    
    $checkbox = $_POST['checkbox'];
    
    for ($i = 0; $i < count($checkbox); $i ++) {
        $id = $checkbox[$i];
        $sql = "DELETE FROM our_vission WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        if (! $result) {
            printf("Error: %s\n", mysqli_error($con));
            exit();
        }
    }
}

header("Location:admin_home_page.php");

?>