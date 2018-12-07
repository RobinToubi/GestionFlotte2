<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Vehicule.php';

class ControleurActualites extends Controleur
{
    private $vehicule;
    private $salarie;

	public function __construct()
	{
        $this->vehicule = new Vehicule();
        $this->salarie = new Salarie();
	}

	//Affiche la liste des nouveaux véhicules, salaries de la société
	public function index()
	{
        $vehicules = $this->vehicules->getDVehicules();
        $salaries = $this->salaries->getDSalarie();
		$this->genererVue(array('vehicules' => $vehicules, 'salaries' => $salaries));
	}

	//Affiche les détails des véhicules
	public function vehicule()
	{
		$info = $this->vehicule->getAVehicule();
		//$vue = new Vue("Vehicule");
		$this->genererVue(array('vehicule' => $info));
    }
}



?>