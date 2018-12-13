<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Entretien.php';

class ControleurHome extends Controleur
{
<<<<<<< HEAD
    private $entretien;

    public function index()
    {
      $this->genererVue();
    }

    public function getAllEntretiens()
    {
      $entretien = $this->entretien->getAllEntretiens();
      $this->genererVue(array('entretien' => $entretien));

    }
}
=======
  private $salarie;

  public function __construct()
  {
      $this->salarie = new Salarie();

  }
>>>>>>> 7b8bac11e0e1bee915b23ce9574e510d0827bc67

  public function index()
  {
    $this->genererVue();
  }

  public function getAllSalaries(){
      $this->$salarie = $salarie;
  }
}
?>
