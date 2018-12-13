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
                $this->requete->getSession()->setAttribut("idSalarie",$salarie['Sid']);
                $this->requete->getSession()->setAttribut("login",$salarie['Smail']);
                if ($salarie['Srole'] == '3')
                {
                  $this->rediriger("admin");
                }
                elseif ($salarie['Srole'] == '2')
                {
                  $this->rediriger("commercial");
                } else {
                  $this->rediriger("salarie");
                }

            }
            else
                $this->genererVue(array('msgErreur' => 'Login ou mot de passe incorrects'),"index");
        }
            //$this->genererVue(array('msgErreur' => 'Login et mot de passe non défini'),'index');
            throw new Exception("Action impossible : login ou mot de passe non défini");
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("");
    }
}
