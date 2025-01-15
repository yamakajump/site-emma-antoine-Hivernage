<?php
require_once(DB_CONNECTION);
require_once(UTILISATEUR);

class PlaceHangardDAO {
    private static $dao;

    private function __construct() {}

    public static function getInstance() {
        if (!isset(self::$dao)) {
            self::$dao = new PlaceHangardDAO();
        }
        return self::$dao;
    }

    public function findAll() {
        $dbc = SqliteConnection::getInstance()->getConnection();
        $query = "SELECT * FROM PlaceHangard";
        $stmt = $dbc->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'PlaceHangard');
        return $results;
    }

    public function insert(PlaceHangard $placeHangard) {
        $dbc = SqliteConnection::getInstance()->getConnection();
        $query = "INSERT INTO PlaceHangard (id, placeHangard1, placeHangard2)
                  VALUES (:id, :placeHangard1, :placeHangard2)";
        $stmt = $dbc->prepare($query);
        $stmt->bindValue(':id', $placeHangard->getId(), PDO::PARAM_STR);
        $stmt->bindValue(':placeHangard1', $placeHangard->getPlaceHangard1(), PDO::PARAM_STR);
        $stmt->bindValue(':placeHangard2', $placeHangard->getPlaceHangard2(), PDO::PARAM_STR);
        $stmt->execute();
    }

    public function delete(PlaceHangard $placeHangard) {
        $dbc = SqliteConnection::getInstance()->getConnection();
        $query = "DELETE FROM PlaceHangard WHERE id = :id";
        $stmt = $dbc->prepare($query);
        $stmt->bindValue(':id', $placeHangard->getId(), PDO::PARAM_STR);
        $stmt->execute();
    }

    public function update(PlaceHangard $placeHangard) {
        $dbc = SqliteConnection::getInstance()->getConnection();
        $query = "UPDATE PlaceHangard SET placeHangard1 = :placeHangard1, placeHangard2 = :placeHangard2 WHERE id = :id";
        $stmt = $dbc->prepare($query);
        $stmt->bindValue(':id', $placeHangard->getId(), PDO::PARAM_STR);
        $stmt->bindValue(':placeHangard1', $placeHangard->getPlaceHangard1(), PDO::PARAM_STR);
        $stmt->bindValue(':placeHangard2', $placeHangard->getPlaceHangard2(), PDO::PARAM_STR);
        $stmt->execute();
    }
}
?>
