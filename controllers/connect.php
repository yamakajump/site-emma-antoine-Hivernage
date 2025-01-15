<?php
require(__ROOT__.'/controllers/Controller.php');

class ConnectController extends Controller{

    public function get($request){
        $this->render('user_connect_form',[]);
    }

    public function post($request){
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        // connection à la base de données
        require_once(DB_CONNECTION);
        $db = SqliteConnection::getInstance()->getConnection();

        require_once(UTILISATEURDAO);
        $user = UtilisateurDAO::getInstance()->findByMail($request['email']);

        // vérification du mot de passe avec la fonction password_verify de php qui compare le mot de passe en clair avec le mot de passe hashé
        $is_good_mdp = password_verify($request['passwd'], $user->getMotDePasse());
        if($is_good_mdp){
            $this->render('user_connect_valid', ['success' => true]);

            $_SESSION['user'] = serialize($user);
        }
        else{
            $this->render('user_connect_valid',['error' => true]);
        }
    }
}

?>
