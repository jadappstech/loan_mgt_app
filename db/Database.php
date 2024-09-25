<?php
class Database {
    // Database credentials
    // $env = parse_ini_file('../env');

    // private $host = $env["DATABASE_HOST"];
    // private $db_name = $env["DATABASE_NAME"];//"jadappst_lms";
    // private $username = $env["DATABASE_USERNAME"];//"jadappst_lms";
    // private $password = $env["DATABASE_PASSWORD"];//"q^7HRVA*-Q@]";
    // private $conn;

    private $host;
    private $db_name;
    private $username;
    private $password;
    private $conn;

    public function __construct() {
        $this->loadEnv();

        // $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        // if ($this->conn->connect_error) {
        //     die("Connection failed: " . $this->conn->connect_error);
        // }
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
    }

    private function loadEnv() {
        $envFile = '../.env';
        if (file_exists($envFile)) {
            $env = parse_ini_file($envFile);
            $this->host = $env["DATABASE_HOST"];
            $this->db_name = $env["DATABASE_NAME"];
            $this->username = $env["DATABASE_USERNAME"];
            $this->password = $env["DATABASE_PASSWORD"];
        } else {
            // Handle missing environment file
            die("Environment file not found: $envFile");
        }
    }

    
    // Static instance for singleton
    private static $instance = null;

    // Private constructor to prevent multiple instances
    // private function __construct() {
    //     try {
    //         $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
    //         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     } catch(PDOException $e) {
    //         echo "Connection error: " . $e->getMessage();
    //     }
    // }

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
