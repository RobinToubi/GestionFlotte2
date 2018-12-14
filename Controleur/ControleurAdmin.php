<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/Vehicule.php';
require_once 'Modele/Entretien.php';
require_once 'Modele/Salarie.php';

class ControleurAdmin extends ControleurSecurise
{
    private $vehicule;
    private $entretien;
    private $salarie;

    public function __construct()
    {
        $this->vehicule = new Vehicule();
        $this->entretien = new Entretien();
        $this->salarie = new Salarie();
    }

    public function index()
    {
        $nbVehicules = $this->vehicule->getNbVehicules();
        $nbEntretiens = $this->entretien->getNbEntretiens();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbVehicules' => $nbVehicules, 'nbEntretiens' => $nbEntretiens, 'login' => $login));
    }

    public function salaries()
    {
       $salaries = $this->salarie->getAllSalaries();
       $this->genererVue(array('salaries' => $salaries));
    }

    public function entretiens()
    {
      $entretiens = $this->entretien->getAllEntretien();
      $this->genererVue(array('entretiens' => $entretiens));
    }
}
