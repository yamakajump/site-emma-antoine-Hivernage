<?php
require(__ROOT__.'/controllers/Controller.php');
require_once(PLACEHANGARDDAO);
require_once(PLACEHANGARD);

class ConnectController extends Controller{

    public function get($request){
        $this->render('dashboard',[]);
    }

    public function post($request){
        // update database with new values
        $placeHangard = PlaceHangardDAO::getInstance()->findAll();
        $placeHangard[0]->setPlaceHangard1($request['place_hangard_1']);
        $placeHangard[0]->setPlaceHangard2($request['place_hangard_2']);

        PlaceHangardDAO::getInstance()->update($placeHangard[0]);

        $this->render('dashboard',[]);
    }
}

?>
