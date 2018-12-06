<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Vehicule.php';
require_once 'Modele/Entretien.php';

class ControleurEntretiens extends Controleur
{
	private $vehicule;
	private $entretien;

	public function __construct()
	{
		$this->vehicule = new Vehicule();
		$this->entretien = new Entretien();
	}

	//Affiche la liste de tous les entretiens d'un véhicule
	public function index()
	{
		$immatriculation = $this->requete->getParametre("id");
		$vehicule = $this->vehicule->getVehicule($immatriculation);
		$entretiens = $this->entretien->getEntretiens($immatriculation);
		$this->genererVue(array('vehicule' => $vehicule, 'entretiens' => $entretiens));
	}

	//Affiche le formulaire d'ajout d'un entretien pour le véhicule spécifié
	public function entretenir()
	{
		$immatriculation = $this->requete->getParametre("id");
		$this->genererVue(array('immatriculation' => $immatriculation));
	}

	//Ajoute un entretien au véhicule spécifié
	public function valider()
	{
		$immat = $this->requete->getParametre("immat");
		//ou $immat = $this->requete->getParametre("id");
		$technicien = $this->requete->getParametre("technicien");
		$descriptif = $this->requete->getParametre("descriptif");
		//Sauvegarde de l'entretien pour le véhicule spécifié
		$this->entretien->ajouterEntretien($immat, $technicien, $descriptif); 
		//Exécute l'action spécifiée pour afficher la liste des entretiens
		//$_GET['id'] est connu de la précédente action
		$this->executerAction("index");
	}
}