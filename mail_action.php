<?php

	include 'dbconnection.php';
    $con = OpenCon();

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];

	if(isset($_POST['submit'])){
		 $to = "sales@hindon.in"; // this is the sender's Email address
		$subject = "Details";
		// $subject2 = "Copy of Profile Details";
		$message =  "Name : " . $name . "\n" . "Email : " . $email . "\n" . "Mobile Number : " . $mobile . "\n" . "Message: " . $message;
		/*$message2 = "Login Link: " . "http://prernahealthcare.org/MLM/login.php" . "\n" . "Your ID: " . $epin . "\n" . "Name: " . $name . "\n" . "Password: " . $pin . "\n" . "Mobile Number: " . $mobile;*/

		$headers = "From:" . $email;
		// $headers2 = "From:" . $email;
		mail($to,$subject,$message,$headers);
	// 	mail($from,$subject2,$message2,$headers2);

		$Message = "Message has been Successfully Send";
		header("location:mail.php?Message={$Message}");
	}
	else{
		$Messagea = "Message not Send Please Send Again";
		header("location:mail.php?Messagea={$Messagea}");
	}
	
?>