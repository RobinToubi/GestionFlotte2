<?php

require_once 'Framework/Controleur.php';

class ControleurHome extends Controleur
{
    public function index()
    {
      $this->genererVue(array());
    }
}

?>
