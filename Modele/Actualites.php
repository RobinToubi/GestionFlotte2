<?php

require_once 'Framework/Modele.php';

class Actualites extends Modele
{
    //Retourne un salarié de la base
    public function getDSalarie()
    {
        $sql = "select Snom, Sprenom from salarie where Sdate between date(now() - INTERVAL 7 DAY) and now()";
        $salarie = $this->executerRequete($sql, array($nom, $prenom));
        if ($salarie->rowCount() == 1)
            return $salarie->fetch();  //Première ligne du résultat
        else
            throw new Exception("Aucun salarié n'a été ajouté dans la semaine");
    }

    public function getDVehicules()
	{
		$requete = "select Venergie, Vmodele from VEHICULE where Vdateajout between date(now() - INTERVAL 7 DAY) and now()";
		$resultats = $this->executerRequete($requete);						
		if ($resultats->rowCount() == 1)
            return $resultats->fetch();  //Première ligne du résultat
        else
            throw new Exception("Aucun vehicule n'a été ajouté dans la semaine");
    
    }

    public function getAVehicule()
	{
		$requete = 'SELECT * FROM Vehicule WHERE Vdateajout BETWEEN date(now() - INTERVAL 7 DAY) and now()';
		$vehicule = $this->executerRequete($requete);
		if ($vehicule->rowCount() == 1)
			return $vehicule->fetch();  // Retourne la première ligne de r�sultat
		else
			throw new Exception("Aucun vehicule n'a été ajouté dans la semaine");
	}
}