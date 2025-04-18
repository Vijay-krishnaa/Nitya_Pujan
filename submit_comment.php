<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "nitya_pujan";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$page = $_POST['page'] ?? 'index.php'; 

$sql = "INSERT INTO comments (name, email, message, page) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $message, $page);

if ($stmt->execute()) {
    echo "<script>alert('Comment submitted successfully!'); window.location.href='$page#comments';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
