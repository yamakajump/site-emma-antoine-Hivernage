<?php
class SqliteConnection {
    private static $instance;
    private $connection;

    private function __construct() {
        try {
            $this->connection = new PDO('sqlite:' . DB_FILE);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new SqliteConnection();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>
