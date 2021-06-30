<?php

namespace App\Controller;

use  App\Framework\AbstractController;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;


Class ContactController extends AbstractController{

    public function index(){ 

        if($_POST){

            $userEmail =trim($_POST['email']);
            $content = trim($_POST['content']);
            $dsn = 'smtp://'.SMTP_USERNAME.':'.SMTP_PASSWORD.'@'.SMTP_HOST.':'.SMTP_PORT.'?encryption=tls&auth_mode=login';
            

            $transport = Transport::fromDsn($dsn);

            $mailer = new Mailer($transport);

            $email = (new Email())
                ->from('contact@mon-site.com')
                ->to('no-reply@mon-site.com')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Nouveaux message d\'un internaute!')
                ->text('Sending emails is fun again!')
                ->html("<div>Email:$userEmail</div><div>$content</div>");
                
                
            $mailer->send($email);
            header('Location')

            
        }
        return $this -> render('contact');
    }
}