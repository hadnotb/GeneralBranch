<?php

namespace App\Framework;

class FlashBag
{
    // Méthodes statiques s'appellent sur la classe et non sur l'objet. 
    static function sessionCheck()
    {
        if (session_status() === PHP_SESSION_NONE) 
        {
            session_start();
        }
    }
    
    static function initFlashBag(string $type)
    {
        self::sessionCheck();
        if (!array_key_exists('flash', $_SESSION) || is_null($_SESSION['flash'])) {
            $_SESSION['flash'] = [];
        }
    
        if (!array_key_exists($type, $_SESSION['flash']) || is_null($_SESSION['flash'][$type])) {
            $_SESSION['flash'][$type] = [];
        }
    }
    // initialise la session pour stocker les messages flash
    static function addFlash(string $message, string $type = 'success')
    {
        // s’assure que la session soit démarrée sinon en démarre une
        // Self représente la classe courante. Et permet d'appeler les méthodes statiques de la classe.
        self::initFlashBag($type);
        $_SESSION['flash'][$type][] = $message;
    }
    // récupère tous les messages d’un certain type et les efface de la session
    static function fetchMessages(string $type)
    {
        self::initFlashBag($type);
        $messages = $_SESSION['flash'][$type];
        $_SESSION['flash'][$type] = null;
        return $messages;
    }
    // est-ce que des messages d’un certain type sont présents dans la session ?
    static function hasMessages(string $type)
    {
        self::initFlashBag($type);
        return count($_SESSION['flash'][$type]);
    }
}