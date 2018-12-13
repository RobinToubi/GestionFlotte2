<?php

require_once 'Framework/Controleur.php';

class ControleurHome extends Controleur
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

  public function getAllSalaries(){
      $this->$salarie = $salarie;
  }
}
?>
