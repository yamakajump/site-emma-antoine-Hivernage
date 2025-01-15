<?php
require(__ROOT__.'/controllers/Controller.php');
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

class DisconnectController extends Controller{

    public function get($request){
        session_destroy();

        $this->render('user_disconnect',[]);
    }

}