<?php

require_once 'Configuration.php';

abstract class Modele
{
	//Attribut de la classe PDO d'accès à la base
	//Statique donc partagé par toutes les instances des classes héritées
	private static $bdd;

	//Exécute une requête SQL éventuellement paramètrée
	protected function executerRequete($sql, $params = null)
	{
		if ($params == null)
		{
			$resultat = self::getConnexionBdd()->query($sql);    //Exécution directe
		}
		else
		{
			$resultat = self::getConnexionBdd()->prepare($sql);  //Requête préparée
			$resultat->execute($params);
		}
		return $resultat;
	}

	//Renvoie un objet de connexion à la BD en initialisant la connexion si nécessaire
	private static function getConnexionBdd()
	{
		if (self::$bdd == null)
		{
			//Récupération des paramètres de configuration de la base
            $dsn = Configuration::get("dsn");
            $login = Configuration::get("login");
            $mdp = Configuration::get("mdp");
            //Création de la connexion
            self::$bdd = new PDO($dsn, $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		return self::$bdd;
	}
}