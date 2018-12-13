<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Salarie.php';

class ControleurConnexion extends Controleur
{
    private $salarie;

    public function __construct()
    {
        $this->salarie = new Salarie();
    }

    public function index()
    {
        $this->genererVue();
    }

    public function connecter()
    {
        if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp"))
        {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
            if ($this->salarie->connecter($login, $mdp))
            {
                $salarie = $this->salarie->getSalarie($login, $mdp);
                $this->requete->getSession()->setAttribut("idSalarie",$salarie['id']);
                $this->requete->getSession()->setAttribut("login",$salarie['login']);
                $this->rediriger("admin");
            }
            else
                $this->genererVue(array('msgErreur' => 'mail ou mot de passe incorrects'),"index");
        }
        else
            $this->genererVue(array('msgErreur' => 'mail et mot de passe non défini'),'index');
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("");
    }
}
