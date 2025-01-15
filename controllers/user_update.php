<?php
require(__ROOT__.'/controllers/Controller.php');
require_once(UTILISATEUR);
require_once(UTILISATEURDAO);
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

class UserUpdateController extends Controller{

    public function get($request){
        $this->render('user_update_form',[]);
    }

    public function post($request){
        $user = unserialize($_SESSION['user']);

        if (isset($request['Modification_Mail'])) {
            try {
                $user->setAdresseMail($request['Modification_Mail']);
                UtilisateurDAO::getInstance()->update($user);
                $_SESSION['user'] = serialize($user);
                $this->render('user_update_form', ['success_mail' => true, 'message' => 'Adresse mail modifiée']);
            } catch (PDOException $e) {
                $this->render('user_update_form', ['erreur_mail' => true, 'message' => 'Erreur lors de la modification de l\'adresse mail']);
            }
        } else if (isset($request['password1'])) {
            try {
                if ($request['password1'] == $request['password2']) {
                    $user->setMotDePasse(password_hash($request['password1'], PASSWORD_DEFAULT, ['cost' => 12]));
                    UtilisateurDAO::getInstance()->update($user);
                    $_SESSION['user'] = serialize($user);
                    $this->render('user_update_form', ['success_password' => true, 'message' => 'Mot de passe modifié']);
                } else {
                    $this->render('user_update_form', ['erreur_password' => true, 'message' => 'Les mots de passe ne correspondent pas']);
                }
            } catch (PDOException $e) {
                $this->render('user_update_form', ['erreur_password' => true, 'message' => 'Erreur lors de la modification du mot de passe']);
            }
        } else {
            $this->render('user_update_form', ['erreur' => true, 'message' => 'Erreur lors de la modification des informations']);
        }
    }
}
