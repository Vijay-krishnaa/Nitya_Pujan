<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "nitya_pujan";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input values
    $name       = $_POST['name'] ?? '';
    $email      = $_POST['email'] ?? '';
    $phone      = $_POST['phone'] ?? '';
    $gender     = $_POST['gender'] ?? '';
    $date       = $_POST['date'] ?? '';
    $time_from  = $_POST['time_from'] ?? '';
    $time_to    = $_POST['time_to'] ?? '';
    $address    = $_POST['address'] ?? '';
    $message    = $_POST['message'] ?? '';


    $sql = "INSERT INTO appointments (name, email, phone, gender, date, time_from, time_to, address, message)
            VALUES ('$name', '$email', '$phone', '$gender', '$date', '$time_from', '$time_to', '$address', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Appointment booked successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
