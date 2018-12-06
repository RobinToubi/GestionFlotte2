<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Vehicule.php';

class ControleurVehicules extends Controleur
{
	private $vehicule;

	public function __construct()
	{
		$this->vehicule = new Vehicule();
	}

	//Affiche la liste de tous les véhicules de la société
	public function index()
	{
		$vehicules = $this->vehicule->getVehicules();
		$this->genererVue(array('vehicules' => $vehicules));
	}

	//Affiche les détails d'un véhicule
	public function vehicule()
	{
		$immatriculation = $this->requete->getParametre("id");
		$vehicule = $this->vehicule->getVehicule($immatriculation);
		//$vue = new Vue("Vehicule");
		$this->genererVue(array('vehicule' => $vehicule));
	}
}