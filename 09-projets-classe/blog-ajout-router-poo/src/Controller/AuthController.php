<?php
namespace App\Controller;
use App\Framework\FlashBag;
use App\Model\UserModel;
use App\Framework\UserSession;
use App\Framework\AbstractController;


class AuthController extends AbstractController{


    public function login(){
        
        
        if ($_POST){
            $userModel = new UserModel();
            $email = trim($_POST['email']);
            $password = $_POST['password'];
            $user = $userModel -> checkCredentials($email,$password);
            
           
        
            if($user == false){
        
                 FlashBag::addFlash('Identifiant incorrect', 'error');
            }
            else{
                
                $roles = $userModel ->getRole($user['idUser']);
                dump($roles);
                
            
                
                UserSession::register($user['idUser'],$user['firstname'],$user['lastname'],$user['email'],$roles);
                dump($_SESSION);
                FlashBag::addFlash('Bonjour '. $user['firstname']. ', merci de vous etre connecté');

                header('Location: ' . buildUrl('homepage'));

                exit;
            }
        
            
        //    $id = UserSession::getId();
            
        }
        
        
        return render('login',[
            'email' => $email??'',
            'pageTitle' => 'Connect'
        
        ]);
    }
    public function logout()
    {
        // Déconnexion
        UserSession::logout();

        // Redirection vers l'accueil
        $this->redirect('homepage');
    }
}