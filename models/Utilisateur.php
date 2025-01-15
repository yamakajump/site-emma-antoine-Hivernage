<?php
class Utilisateur {
    private $id;
    private $adresseMail;
    private $motDePasse;
    
    public function __construct() {}

    public function init($adresseMail, $motDePasse) {
        $this->adresseMail = $adresseMail;
        $this->motDePasse = $motDePasse;
    }

    // getters

    public function getId() {
        return $this->id;
    }

    public function getAdresseMail() {
        return $this->adresseMail;
    }

    public function getMotDePasse() {
        return $this->motDePasse;
    }

    // setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setAdresseMail($adresseMail) {
        $this->adresseMail = $adresseMail;
    }

    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }
}
?>