<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Vehicule.php';
require_once 'Modele/Salarie.php' ;
require_once 'Modele/Actualites.php' ;

class ControleurActualites extends Controleur
{

    private $actualite;

	public function __construct()
	{
        $this->vehicule = new Vehicule();
        $this->salarie = new Salarie();
	}

	//Affiche la liste des nouveaux véhicules, salaries de la société
	public function index()
	{
        $vehicule = $this->actualite->getDVehicules();
        $salaries = $this->actualite->getDSalarie();
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