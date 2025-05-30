<?php
class Database
{
    private $host = "localhost";
    private $dbname = "yaxwebsite_db";
    private $username = "root";
    private $password = "password";
    public $conn;

    public function __construct()
    {
        $this->conn = mysql_connect($this->host, $this->username, $this->password)
            or die("Cannot connect to database");

        mysql_select_db($this->dbname, $this->conn)
            or die("Cannot select database");
    }
}
?>
