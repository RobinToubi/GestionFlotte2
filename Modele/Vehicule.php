<?php

require_once 'Framework/Modele.php';

class Vehicule extends Modele
{
	//Retourne la liste de tous les v�hicules de la soci�t�
	public function getVehicules()
	{
		$requete = 'select Vimmat as immat, VdateAchat as date, Vmodele as modele, Venergie as energie from VEHICULE order by VdateAchat';
		$resultats = $this->executerRequete($requete);						
		return $resultats;
	}
	
	//Retourne le détail d'un véhicule
	public function getVehicule($immat)
	{
		$requete = 'SELECT * FROM Vehicule WHERE Vimmat=?';
		$vehicule = $this->executerRequete($requete,array($immat));
		if ($vehicule->rowCount() == 1)
			return $vehicule->fetch();  // Retourne la première ligne de r�sultat
		else
			throw new Exception("Aucun véhicule ne correspond à l'immatriculation '$immat'");
	}

    //Retourne le nombre total de véhicules
    public function getNbVehicules()
    {
        $sql = 'select count(*) as nb from vehicule';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  //Première ligne du résultat
        return $ligne['nb'];
    }
}