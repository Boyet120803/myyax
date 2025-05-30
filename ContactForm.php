<?php
require_once 'Database.php';

class ContactForm
{
    private $db;
    private $name;
    private $email;
    private $subject;
    private $message;

    public function __construct($post)
    {
        $database = new Database();
        $this->db = $database->conn;

        $this->name = htmlspecialchars($post['name']);
        $this->email = htmlspecialchars($post['email']);
        $this->subject = htmlspecialchars($post['subject']);
        $this->message = htmlspecialchars($post['message']);
    }

    public function save()
    {
        $sql = "INSERT INTO messages (name, email, subject, message)
                VALUES (:name, :email, :subject, :message)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':subject' => $this->subject,
            ':message' => $this->message
        ]);
    }
}
?>
