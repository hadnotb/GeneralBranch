<?php

namespace App\Model;

use App\Framework\AbstractModel;

class UserModel extends AbstractModel
{
    function createUser($firstname, $lastname, $email, $password)
    {
        $sql = 'INSERT INTO user
        (firstname, lastname, email, password, created_at)
        VALUES
        (?, ?, ?, ?, NOW());';

        $createUser =  $this->database->executeQuery($sql, [$firstname, $lastname, $email, $password]);
    }
    public function getUserByEmail(string $email)
    {
        $sql = 'SELECT *
                FROM user
                WHERE email = ?';

        return $this->database->getOneResult($sql, [$email]);
    }
    // Vérification de l'e-mail et du mot de passe.
    public function checkCredentials(string $email, string $password)
    {
        // On va chercher l'utilisateur par son email, et on le stocke dans la variable $user.
        $user = $this->getUserByEmail($email);
        if (!$user) // Si l'on n'a pas trouvé l'utilisateur, on retourne false.
        {
            return false;
        }
        if (!password_verify($password, $user['password'])) // Si l'on ne trouve pas le bon mot de passe, prenant en paramètre le mot de passe, ainsi que la variable utilisateur qui prend dans un tableau le mot de passe inséré dans le formulaire de connexion, on retourne false.
        {
            return false;
        }
        // Si tout va bien, on retourne l'utilisateur.
        return $user;
    }
}