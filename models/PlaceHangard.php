<?php
class PlaceHangard {
    private $id;
    private $placeHangard1;
    private $placeHangard2;
    
    public function __construct() {}

    public function init($placeHangard1, $placeHangard2) {
        $this->placeHangard1 = $placeHangard1;
        $this->placeHangard2 = $placeHangard2;
    }

    // getters

    public function getId() {
        return $this->id;
    }

    public function getPlaceHangard1() {
        return $this->placeHangard1;
    }

    public function getPlaceHangard2() {
        return $this->placeHangard2;
    }

    // setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setPlaceHangard1($placeHangard1) {
        $this->placeHangard1 = $placeHangard1;
    }

    public function setPlaceHangard2($placeHangard2) {
        $this->placeHangard2 = $placeHangard2;
    }
}
?>