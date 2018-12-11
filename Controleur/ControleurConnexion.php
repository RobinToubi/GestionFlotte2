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
        if ($this->requete->existeParametre("mail") && $this->requete->existeParametre("mdp"))
        {
            $mail = $this->requete->getParametre("mail");
            $mdp = $this->requete->getParametre("mdp");
            if ($this->salarie->connecter($mail, $mdp))
            {
                $salarie = $this->salarie->getSalarie($mail, $mdp);
                $this->requete->getSession()->setAttribut("idSalarie",$salarie['id']);
                $this->requete->getSession()->setAttribut("mail",$salarie['mail']);
                $this->rediriger("admin");
            }
            else
                $this->genererVue(array('msgErreur' => 'mail ou mot de passe incorrects'),"index");
        }
        else
            //$this->genererVue(array('msgErreur' => 'mail et mot de passe non défini'),'index');
            throw new Exception("Action impossible : mail ou mot de passe non défini");
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("");
    }
}
