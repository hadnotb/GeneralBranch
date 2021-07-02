<?php
namespace App\Controller;
use App\Framework\AbstractController;
use App\Framework\FlashBag;
use App\Model\UserModel;

class NewsletterController extends AbstractController{

    public function newsLetterAdd (){

        if($_POST){

            $email = trim($_POST['email']);
            $userModel = new UserModel();
            $idOrigins = (int) ($_POST['origins']);

           

            if(!$email){
                FlashBag::addFlash('Le champs "Email" est obligatoire','error');
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                FlashBag::addFlash('Le champ "Email" n\'est pas valide','error');
            }elseif ($userModel->getUserByEmail($email)) {
                FlashBag::addFlash('Il existe déjà un compte avec cet email','error');    
            }

            if(!FlashBag::hasMessages('error')){

                 $userModel ->insertSubscriber($email,$idOrigins);

                 FlashBag::addFlash('Compte créé avec succès, connectez-vous.');
                 $this->redirect('homepage');

            }

        }



        return $this->render('newsletter',[

                'email' => $email??''
        ]);

    }

}



