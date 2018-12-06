<?php

class Configuration
{
	private static $parametres;
	
	//Retourne la valeur d'un paramètre de configuration
	public static function get($nom, $valeurParDefaut = null)
	{
		if (isset(self::getParametres()[$nom]))
		{
    		$valeur = self::getParametres()[$nom];
    	}
		else
		{
      		$valeur = $valeurParDefaut;
    	}
    	return $valeur;
  	}

  	//Retourne le tableau des paramètres en le chargeant si nécessaire
	private static function getParametres()
	{
		if (self::$parametres == null)
		{
      		$cheminFichier = "Config/prod.ini";
			if (!file_exists($cheminFichier))
			{
        		$cheminFichier = "Config/dev.ini";
      		}
			if (!file_exists($cheminFichier))
			{
        		throw new Exception("Aucun fichier de configuration trouvé");
      		}
			else
			{
        		self::$parametres = parse_ini_file($cheminFichier);
      		}
    	}
    	return self::$parametres;
  	}
}