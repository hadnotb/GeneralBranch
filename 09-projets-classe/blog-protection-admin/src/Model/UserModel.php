<?php
namespace App\Model;

use App\Framework\AbstractModel;
use App\Framework\Database;

class UserModel extends AbstractModel{
    
       
    protected $firstname ='bibi'; 
    protected $lastname ='bobo';
    protected $email = 'bibi@bobo.com' ;
    protected $password = "";
     
    public function insertUser($firstname,$lastname,$email,$password)
        {
        $sql = 'INSERT INTO user
                (firstname,lastname,email,password,created_at) VALUES (?,?,?,?, NOW())';
        $database = new Database();

        $database -> executeQuery($sql, [$firstname, $lastname, $email, $password]);
        }
   
   public  function getUserByEmail($email){
        $sql = 'SELECT email
                From user
                Where email = ?';

        $mailuser = $this ->database -> getOneResult($sql, [$email]);
        return $mailuser;
    }

    public  function getUserInfoByEmail($email){
        $sql = 'SELECT *
                From user
                Where email = ?';

        $mailuser = $this ->database -> getOneResult($sql, [$email]);
        return $mailuser;
    }

   public function getPasswordbyHash($hash){

        $sql ='SELECT password
              FROM user
              WHERE password = ?';
        $passwordhashed = $this ->database-> getOneResult($sql,[$hash]);
        return $passwordhashed;   


   } 

//    public function checkCredentials($email,$password){

//         $mailuser = $this -> getUserByEmail($email);

//         $hash = password_hash($password,PASSWORD_DEFAULT);
//         $passwordhashed = $this -> getPasswordbyHash($password);
//         $passwordchecked = password_verify($hash,$passwordhashed);

//         if ($mailuser && ($passwordcheck = true)){

//                 $userinfo = $this -> getUserInfoByEmail($email);
//                 return $userinfo ;
//         }
//         else{
//                 return false ;
//         }
//    }

        public function checkCredentials(string $email, string $password)
        {
        // On va chercher dans la base l'utilisateur qui correspond à l'email
        $user = $this->getUserInfoByEmail($email);

        // Si on ne trouve aucun utilisateur avec cet email => échec
                if (!$user) {
                        return false;
                }

                // Ensuite si le mot de passe est inccorrect => échec
                if (!password_verify($password, $user['password'])) {
                        return false;
                }

        // Si tout est ok, on retourne l'utilisateur
                return $user;
        }    

        public function addRole($userId,$role){
                
                $sql = 'INSERT INTO user_role (idUser, idRole) 
                VALUES (?, (SELECT idRole FROM role WHERE role_label = ?))';

                $this->database->insert($sql, [$userId, $role]);

        }


}