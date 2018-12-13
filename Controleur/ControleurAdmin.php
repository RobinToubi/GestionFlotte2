<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/Vehicule.php';
require_once 'Modele/Entretien.php';

class ControleurAdmin extends ControleurSecurise
{
    private $vehicule;
    private $entretien;

    public function __construct()
    {
        $this->vehicule = new Vehicule();
        $this->entretien = new Entretien();
    }

    public function index()
    {
        $nbVehicules = $this->vehicule->getNbVehicules();
        $nbEntretiens = $this->entretien->getNbEntretiens();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbVehicules' => $nbVehicules, 'nbEntretiens' => $nbEntretiens, 'login' => $login));
    }

    public function entretiens()
    {
        $entretiens = $this->entretien->getAllEntretien();
        $this->genererVue(array('entretiens' => $entretiens));

    }
}