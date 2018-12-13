<?php

require_once 'Modele/Centre.php';
require_once 'Vue/Vue.php';

class ControleurCentre {

	private $centre;

	public function __construct(){
		$this->centre = new Centre();
	}

	public function afficherCentre($idCentre){

		$centre = $this->centre->getCentre($idCentre);

		$vue = new Vue('Centre');
		$vue->generer(array('centre' => $centre));
	}
	public function centres(){
		$centres = $this->centre->getCentres();

		$vue = new Vue('Centres');
		$vue->generer(array('centres' => $centres));
	}
	public function modifierCentre($idCentre, $RaisonSociale, $Add, $CodePostal, $Ville, $Tel){
		$RaisonSociale = strtoupper($RaisonSociale);
		$this->centre->modifierCentre($idCentre, $RaisonSociale, $Add, $CodePostal, $Ville, $Tel);

		$this->afficherCentre($idCentre);
	}
	public function ajouterCentre(){
		$vue = new Vue('AjouterCentre');
		$vue->generer(array());
	}
	public function addCentre($RaisonSociale, $Add, $CodePostal, $Ville, $Tel){
		$RaisonSociale = strtoupper($RaisonSociale);
		$this->centre->ajouterCentre($RaisonSociale, $Add, $CodePostal, $Ville, $Tel);

		$this->centres();
	}

}