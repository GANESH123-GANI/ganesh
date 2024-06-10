<?php
// Retrieve form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$event = $_POST['event'];
$comments = $_POST['comments'];

// Connect to MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "event_management";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert data into database
$sql = "INSERT INTO event_registrations (full_name, email, address, phone, event, comments) VALUES ('$fullName', '$email', '$address', '$phone', '$event', '$comments')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
