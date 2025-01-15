<?php
require(__ROOT__.'/controllers/Controller.php');
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

class UserAddController extends Controller{

    public function get($request){
        $this->render('user_gestion',[]);
    }

    public function post($request){
        
    }

}