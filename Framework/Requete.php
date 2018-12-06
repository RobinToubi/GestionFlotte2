<?php

require_once 'Session.php';

class Requete
{
	//paramètres de la requête
	private $parametres;
	private $session;

	public function __construct($parametres)
	{
		$this->parametres = $parametres;
		$this->session = new Session();
	}

    //Retourne l'objet session associé à la requête
    public function getSession()
    {
        return $this->session;
    }

	//Retourne vrai si le paramètre existe dans la requête
	public function existeParametre($nom)
	{
    	return (isset($this->parametres[$nom]) && $this->parametres[$nom] != "");
	}

	//Retourne la valeur du paramètre demandé
	//Lève une exception si le paramètre est introuvable
	public function getParametre($nom)
	{
		if ($this->existeParametre($nom))
		{
    		return $this->parametres[$nom];
    	}
    	else
			throw new Exception("Paramètre '$nom' absent de la requête");
	}
}