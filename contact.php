<?php
// Database Connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mypersonaldb";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Process Form Submission
$messageResponse = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $subject = sanitizeInput($_POST['subject'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $messageResponse = "Invalid email format!";
    } else {
        $query = "INSERT INTO users (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
        
        if ($conn->query($query) === TRUE) {
            $messageResponse = "Message sent successfully!";
        } else {
            $messageResponse = "Error: " . $conn->error;
        }
    }
}
?>