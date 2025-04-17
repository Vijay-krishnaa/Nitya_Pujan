<?php

session_start();


$host = "localhost";
$username = "root";
$password = "";
$database = "nitya_pujan";

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$first_name = $_POST['first_name'] ?? '';
$last_name = $_POST['last_name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($first_name) || empty($last_name) || empty($email) || empty($subject) || empty($message)) {
    die("All fields are required.");
}


$sql = "INSERT INTO contact_messages (first_name, last_name, email, subject, message) VALUES ('$first_name', '$last_name', '$email', '$subject', '$message')";


if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Message sent successfully!'); window.location.href='index.php';</script>";


} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>
