<?php
class Database {
    // Database credentials
    private $host = 'localhost';
    private $db_name = 'loan_mgt_app';
    private $username = 'root';
    private $password = '';
    private $conn;
    
    // Static instance for singleton
    private static $instance = null;

    // Private constructor to prevent multiple instances
    private function __construct() {
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
    }

    // Method to get the instance of the database connection
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance->conn;
    }

    // Prevent cloning of the instance
    private function __clone() { }

    // Prevent unserializing of the instance
    public function __wakeup() { }
}
