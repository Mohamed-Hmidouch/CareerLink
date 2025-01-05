<?php
namespace APP\Config;
use PDO;
use PDOException;
class Database {
    private $host = '192.168.73.1';
    private $dbName = 'Careerlink';
    private $username = 'root';
    private $password = 'root_password';
    private $connection;

    public function getConnection() {
        $this->connection = null;
        try {
            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->connection;
    }
}