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

        $this->name = mysql_real_escape_string($post['name']);
        $this->email = mysql_real_escape_string($post['email']);
        $this->subject = mysql_real_escape_string($post['subject']);
        $this->message = mysql_real_escape_string($post['message']);
    }

    public function save()
    {
        $sql = "INSERT INTO messages (name, email, subject, message)
                VALUES ('$this->name', '$this->email', '$this->subject', '$this->message')";

        return mysql_query($sql, $this->db);
    }
}
?>
