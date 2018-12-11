<?php

require_once 'Modele/Modele.php';

class Centre extends Modele {

	public function getCentres(){
		$centres = $this->executerRequete('SELECT * FROM centre');
		return $centres;
	}
	public function getCentre($idCentre){
		$centre = $this->executerRequete('SELECT * FROM centre WHERE Cagrement = "'.$idCentre.'"')->fetch();
		return $centre;
	}

	public function ajouterCentre($Cagrement, $RaisonSociale, $Add, $CodePostal, $Ville, $Tel, $Gaz, $idEnseigne){
		$this->executerRequete('INSERT INTO centre SET Cagrement = ?, CraisonSociale = ?, Cadresse = ?, CcodePostal = ?, Cville = ?, Ctelephone = ?', array($Cagrement, $RaisonSociale, $Add, $CodePostal, $Ville, $Tel));
	}
	public function modifierCentre($idCentre, $RaisonSociale, $Add, $CodePostal, $Ville, $Tel, $Gaz, $idEnseigne){
		$this->executerRequete('UPDATE centre SET CraisonSociale = ?, Cadresse = ?, CcodePostal = ?, Cville = ?, Ctelephone = ? WHERE Cagrement = ?', array($RaisonSociale, $Add, $CodePostal, $Ville, $Tel, $idCentre));
	}

}
