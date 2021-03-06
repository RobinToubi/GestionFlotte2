<?php

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function detruire()
    {
        session_destroy();
    }

    //Ajoute un attribut à la session
    public function setAttribut($nom, $valeur)
    {
        $_SESSION[$nom] = $valeur;
    }
    
    //Retourne vrai si l'attribut existe dans la session
    public function existeAttribut($nom)
    {
        return (isset($_SESSION[$nom]) && $_SESSION[$nom] != "");
    }
    
    //Retourne la valeur de l'attribut demandé
    public function getAttribut($nom)
    {
        if ($this->existeAttribut($nom))
        {
            return $_SESSION[$nom];
        }
        else
        {
            throw new Exception("Attribut '$nom' n'existe pas dans cette session");
        }
    }
}