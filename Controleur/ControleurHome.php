<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Entretien.php';

class ControleurHome extends Controleur
{
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

?>
