<?php

require_once 'Framework/Modele.php';

class Entretien extends Modele
{
	// Retourne la liste des entretiens associés à un véhicule
	public function getEntretiens($immat)
	{
		$requete = 'SELECT * FROM Entretien WHERE Eimmat=?';
		$entretiens = $this->executerRequete($requete,array($immat));
		return $entretiens;
	}

    //Retourne le nombre total d'entretiens
    public function getNbEntretiens()
    {
        $sql = 'select count(*) as nb from entretien';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  //Première ligne du résultat
        return $ligne['nb'];
    }

    //Ajoute un entretien
	public function ajouterEntretien($immat, $technicien, $descriptif)
	{
		$requete = 'INSERT INTO ENTRETIEN(Edate, Etechnicien, Edescriptif, Eimmat) VALUES(?, ?, ?, ?)';
		$date = date(DATE_W3C);
		$this->executerRequete($requete, array($date, $technicien, $descriptif, $immat));
	}

	public function getAllEntretien()
	{
		$requete = 'select * from Entretien order by Edate';
		$resultats = $this->executerRequete($requete);						
		return $resultats;
	}
}