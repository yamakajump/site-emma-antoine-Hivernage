<?php
require(__ROOT__.'/controllers/Controller.php');
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

class UserAddController extends Controller{

    public function get($request){
        $this->render('user_add_form',[]);
    }

    public function post($request){
        // connection à la base de données
        require_once(DB_CONNECTION);
        $db = SqliteConnection::getInstance()->getConnection();

        require_once(UTILISATEURDAO);
        $user = UtilisateurDAO::getInstance()->findByMail($request['email']);
        if($user != null){
            $this->render('user_add_valid', ['error' => true]);
        }
        else {
            try {
                $user = new Utilisateur();
                $user->init($request['email'], $request['password1'], $request['nom'], $request['prenom'], $request['dateNaissance'], $request['sexe'], $request['taille'], $request['poids']);
                UtilisateurDAO::getInstance()->insert($user);
                $this->render('user_add_valid', ['success' => true]);
            } catch (Exception $e) {
                $this->render('user_add_valid', ['error' => true]);
            }
        }
    }

}