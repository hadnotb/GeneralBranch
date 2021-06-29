<?php
namespace App\Controller;
use App\Framework\FlashBag;
use App\Model\UserModel;
use App\Framework\AbstractController;
use App\Framework\UserSession;

class AccountController extends AbstractController{


    public function signup(){
        
        if (!empty($_POST)) {
            $userModel = new UserModel();
           
        
            $firstname = trim($_POST['firstname']);
            $lastname  = trim($_POST['lastname']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $mailuser = $userModel -> getUserByEmail($email);
            $hash = password_hash($password,PASSWORD_DEFAULT);
        
            if(!$firstname||!$lastname||!$email||!$password){
                FlashBag::addFlash('Les champs sont obligatoire !!!!!', 'error');
            }
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                FlashBag:: addFlash('Email Incorrecte', 'error');
            }
            
            
            if($mailuser){
        
                FlashBag:: addFlash('Email déja existant','error');
        
            }
            if (!FlashBag::hasMessages('error')){
        
        
        
                $userId = $userModel->insertUser($firstname, $lastname, $email, $hash); 
                
                $userModel->addRole($userId, UserModel::ROLE_USER);
        
                FlashBag::addFlash('Votre compte a bien été pris en compte ;)');
                header('Location: ' . buildUrl('homepage'));
                exit;
            }
            

             
           
        }
        return $this -> render('signup',[
            'firstname' => $firstname??'',
            'lastname'  => $lastname??'',
            'email' => $email??''
        ]);   

    }
}