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
echo "sucessfully";

?>