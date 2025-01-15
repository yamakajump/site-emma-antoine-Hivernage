<?php
require_once(DB_CONNECTION);
require_once(UTILISATEUR);

class UtilisateurDAO {
    private static $dao;

    private function __construct() {}

    public static function getInstance() {
        if (!isset(self::$dao)) {
            self::$dao = new UtilisateurDAO();
        }
        return self::$dao;
    }

    public function findAll() {
        $dbc = SqliteConnection::getInstance()->getConnection();
        $query = "SELECT * FROM Utilisateur";
        $stmt = $dbc->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Utilisateur');
        return $results;
    }

    public function insert(Utilisateur $utilisateur) {
        $dbc = SqliteConnection::getInstance()->getConnection();
        $query = "INSERT INTO Utilisateur (id, adresseMail, motDePasse)
                  VALUES (:id, :adresseMail, :motDePasse)";
        $stmt = $dbc->prepare($query);
        $stmt->bindValue(':id', $utilisateur->getId(), PDO::PARAM_STR);
        $stmt->bindValue(':adresseMail', $utilisateur->getAdresseMail(), PDO::PARAM_STR);
        $stmt->bindValue(':motDePasse', $utilisateur->getMotDePasse(), PDO::PARAM_STR);
        $stmt->execute();
    }

    public function delete(Utilisateur $utilisateur) {
        $dbc = SqliteConnection::getInstance()->getConnection();
        $query = "DELETE FROM Utilisateur WHERE id = :id";
        $stmt = $dbc->prepare($query);
        $stmt->bindValue(':id', $utilisateur->getId(), PDO::PARAM_STR);
        $stmt->execute();
    }

    public function update(Utilisateur $utilisateur) {
        $dbc = SqliteConnection::getInstance()->getConnection();
        $query = "UPDATE Utilisateur SET adresseMail = :adresseMail, motDePasse = :motDePasse WHERE id = :id";
        $stmt = $dbc->prepare($query);
        $stmt->bindValue(':id', $utilisateur->getId(), PDO::PARAM_STR);
        $stmt->bindValue(':adresseMail', $utilisateur->getAdresseMail(), PDO::PARAM_STR);
        $stmt->bindValue(':motDePasse', $utilisateur->getMotDePasse(), PDO::PARAM_STR);
        $stmt->execute();
    }

    public function findByMailAndMdp($mail, $passwd) {
        $dbc = SqliteConnection::getInstance()->getConnection();
        $query = "SELECT * FROM Utilisateur WHERE adresseMail = :adresseMail AND motDePasse = :motDePasse";
        $stmt = $dbc->prepare($query);
        $stmt->bindValue(':adresseMail', $mail, PDO::PARAM_STR);
        $stmt->bindValue(':motDePasse', $passwd, PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Utilisateur');
        
        // return results or null
        if (count($results) == 0) {
            return null;
        }
        else {
            return $results[0];
        }

        return $results;
    }

    public function findByMail ($mail) {
        $dbc = SqliteConnection::getInstance()->getConnection();
        $query = "SELECT * FROM Utilisateur WHERE adresseMail = :adresseMail";
        $stmt = $dbc->prepare($query);
        $stmt->bindValue(':adresseMail', $mail, PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Utilisateur');
        
        // return results or null
        if (count($results) == 0) {
            return null;
        }
        else {
            return $results[0];
        }

        return $results;
    }
}
?>
