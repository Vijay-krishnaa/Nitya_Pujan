<?php
session_start();
?>
<?php

$servername = "localhost";
$username = "root";        
$password = "";           
$dbname = "nitya_pujan";   

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password']; 
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];


$sql = "INSERT INTO users (name, email, password, mobile, gender) 
        VALUES ('$name', '$email', '$password', '$mobile', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Signup successfully!'); window.location.href='index.php';</script>";

} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
