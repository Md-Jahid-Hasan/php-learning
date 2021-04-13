<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "server";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo "Connection Successfull";
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Error";
}

?>

