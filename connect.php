<?php
$servername = "localhost";
$username = "root";
$password = "";
$databae="mydb";

// Create connection
$connection=mysqli_connect($servername, $username, $password,$databae);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
echo "";

?>
<body class="main-bg"  >
        <div class="login-container text-c animated flipInX">
            <div>
                   
                    <h3 class="text-whitesmoke" style="
    font-family: cursive;  font-size:40px;
    color: #a57618;
    margin: auto; "    >sucessfully</h3></div>