<?php

namespace App\Framework;
class UserSession {

    static public function sessionCheck()
    {
        if (session_status() === PHP_SESSION_NONE) 
        {
            session_start();
        }
    }
    static public function register($idUser,$firstname,$lastname,$email)
    {
        SELF::sessionCheck();
        // if (!array_key_exists('user', $_SESSION) || is_null($_SESSION['user'])) 
        // {
        //     $_SESSION['user'] = [];
        // }
        // if (!array_key_exists('user', $_SESSION['flash']) || is_null($_SESSION['flash'][$user])) 
        // {
        //     $_SESSION['user'][$user] = [

        //         'userId' => $user['idUser'],
        //         'first' => $user['firstname'],
        //         'userId' => $user['lastname'],
        //         'userId' => $user['email'],
        //     ];
        // }
        $_SESSION['user'] =[
            'userId' => $idUser,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email
        ];
    }
    static public function isAuthenticated(){
        // if (array_key_exists('user', $_SESSION) || !is_null($_SESSION['user'])) {
        //     return true;
        // }
        // else{return false ;}
        SELF::sessionCheck();
        return (array_key_exists('user', $_SESSION) && !is_null($_SESSION['user']));

    }
    static public function logout(){
        SELF::sessionCheck();
        session_destroy();
        $_SESSION ['user']= null;
       
    }
    static public function getId(){
        // if (array_key_exists('user', $_SESSION) && !is_null($_SESSION['user'])) 
        if (UserSession::isAuthenticated())
        {
            $id = $_SESSION ['user']['userId'];
            return $id;
        }
    }
    static public function getEmail(){
        // if (array_key_exists('user', $_SESSION) && !is_null($_SESSION['user'])) 
        if (UserSession::isAuthenticated())
        {
            $email = $_SESSION ['user']['email'];
            return $email;
        }
    }
    static public function getFirstname(){
        // if (array_key_exists('user', $_SESSION) && !is_null($_SESSION['user']))
        if (UserSession::isAuthenticated())
        {
            $firstname = $_SESSION ['user']['firstname'];
            return $firstname;
        }
    }
    static public function getLastname()
    {
        // if (array_key_exists('user', $_SESSION) && !is_null($_SESSION['user']))
        if (UserSession::isAuthenticated()) 
        {
            $lastname = $_SESSION ['user']['lastname'];
            return $lastname;
        }
    }



}