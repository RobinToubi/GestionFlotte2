<?php

require_once 'Controleur/ControleurSecurise.php';
require_once 'Modele/Vehicule.php';

class ControleurSalarie extends ControleurSecurise
{
  private $vehicule;

  public function __construct()
  {
    $this->vehicule = new Vehicule();
  }

  public function index()
  {
    $login = $this->requete->getSession()->getAttribut('login');
    $this->genererVue(array('login' => $login));
  }

} ?>
