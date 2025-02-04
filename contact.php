<?php
class Database {
    private $host = "localhost";
    private $user = "root"; // Change if needed
    private $pass = "password"; // Change if needed
    private $dbname = "mypersonaldb";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die("Database Connection Failed: " . $this->conn->connect_error);
        }
    }
}

class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Function to sanitize input
    private function sanitizeInput($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Function to store user message
    public function createUser($name, $email, $subject, $message) {
        $name = $this->sanitizeInput($name);
        $email = $this->sanitizeInput($email);
        $subject = $this->sanitizeInput($subject);
        $message = $this->sanitizeInput($message);

        // Check kung valid ang email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format!";
        }

        // Insert user message into `users` table
        $stmt = $this->conn->prepare("INSERT INTO users (name, email, subject, message) VALUES (?, ?, ?, ?)");
        if (!$stmt) {
            return "SQL Error: " . $this->conn->error;
        }

        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            return "Message sent successfully!";
        } else {
            error_log("SQL Error: " . $stmt->error);
            return "Error: " . $stmt->error;
        }
    }
}

// Process Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database();
    $user = new User($db->conn);

    // Debugging - check if POST data is received
    error_log("Form Data: " . print_r($_POST, true));

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $response = $user->createUser($name, $email, $subject, $message);
    echo "<script>alert('$response'); window.location.href='../index.html';</script>";
}
?>
