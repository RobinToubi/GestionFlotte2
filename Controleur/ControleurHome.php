<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Entretien.php';

class ControleurHome extends Controleur
{
    public function index()
    {
      $this->genererVue();
    }

}
?>
