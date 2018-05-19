<?php
	include 'dbconnection.php';
    $con = OpenCon();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "select * from register where member_id='$username' and pin='$password'";
	$result = mysqli_query($con, $query);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		session_start();
		$row = mysqli_fetch_array($result);
		$_SESSION['member_id']=$row['member_id'];
		
		header("location:admin/index.php");
        
		//echo "hello";
	}
mysqli_close($con);
?>