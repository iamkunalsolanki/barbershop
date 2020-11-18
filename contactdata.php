<?php
include("connect1.php");


if(isset($_POST['submit']))

{ 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	


$result=mysqli_query($connection,"INSERT INTO cud values( '','$name','$email','$message') ");
	if($result)
	{
		echo "done";
		header("location:contact.php");
	}
		else {
		echo "failed";


		}
	}

	?>
