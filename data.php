<?php
include("connect.php");


if(isset($_POST['submit']))

{ 
	$Fname=$_POST['Fname'];
	$tel=$_POST['tel'];
	$date=$_POST['date'];
	$time=$_POST['time'];


$result=mysqli_query($connection,"INSERT INTO second values( '','$Fname','$tel','$date','$time') ");
	if($result)
	{

		 echo "sucess";
		 header("location: sucessmsg.html ");
		 
	}
	
	
	
		else {
		echo "failed";




		}
	}
?>
<body class="main-bg"  >
        <div class="login-container text-c animated flipInX">
            <div>
                   
                    <h3 class="text-whitesmoke" style="
    font-family: cursive;  font-size:40px;
    color: #a57618;
    margin: auto; "    >Booked</div>

