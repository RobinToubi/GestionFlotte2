<?php

require_once 'Framework/Controleur.php';

abstract class ControleurSecurise extends Controleur
{
    public function executerAction($action)
    {
        //Permet de vérifier si les informations de l'utilisateur sont présents dans la session
        //Si oui, l'utilisateur est déjà authentifié : l'exécution de l'action continue normalement
        //Si non, l'utilisateur est renvoyé vers le contrôleur de connexion
        if ($this->requete->getSession()->existeAttribut("idSalarie"))
        {
            parent::executerAction($action);
        }
        else
        {
            $this->rediriger("Connexion/index.php");
        }
    }
}