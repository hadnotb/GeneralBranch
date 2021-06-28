<?php

namespace App\Framework;

// La classe UserSession s'occupera de toutes les opérations liées à la connexion / déconnexion
// On y trouvera par exemple la méthode register() qui enregistrera les données de l'utilisateur en session. 
// La méthode isAuthenticated() permettra de savoir si l'utilisateur est connecté ou non. 
// Des getters iront chercher les données de l'utilisateur connecté : getId(), getFirstname(), getEmail(), etc

class UserSession
{
    static function sessionCheck()
    {
        if (session_status() === PHP_SESSION_NONE) 
        {
            session_start();
        }
    }
    // La fonction register prend en paramètre l'id de l'utilisateur, son nom, son prénom ainsi que son email.
    static function register(int $userId, string $firstname, string $lastname, string $email)
    {
        self::sessionCheck();

        // Enregistrement des données de l'utilisateur en session à la clé 'user'.
        // Création de la clé user et du tableau associatif.
        $_SESSION['user'] = [
            'userId' => $userId,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email
        ];
    }
    static function isAuthenticated()
    {
        // Recherche de la clé user, si elle existe, alors on est authentifié, sinon, on ne l'est pas. 
        self::sessionCheck();
        if (array_key_exists('user', $_SESSION) && isset($_SESSION['user']))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    static function logout()
    {
        // Déconnexion. On récupère le $_SESSION['user'], on met null dedans, et on détruit la session.
        self::sessioncheck();
        $_SESSION['user'] = null;
        session_destroy();
    }
    static function getId()
    {
        if (!self::isAuthenticated())
        {
            return null;
        }
        return $_SESSION['user']['userId'];
    }
    static function getEmail()
    {
        if (!self::isAuthenticated())
        {
            return null;
        }
        return $_SESSION['user']['email'];
    }
    public static function getFirstName()
    {
        if (SELF::isAuthenticated()==true)
        {
            $firstname = $_SESSION["user"]["firstname"];
            return $firstname;
        }
    }
    public static function getLastName()
    {
        if (SELF::isAuthenticated()==true)
        {
            $lastname = $_SESSION["user"]["lastname"];
            return $lastname;
        }
    }
}