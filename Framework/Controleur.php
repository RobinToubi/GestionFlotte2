<?php

require_once 'Configuration.php';
require_once 'Requete.php';
require_once 'Vue.php';

abstract class Controleur
{

	//Action à réaliser
  	private $action;

  	//Requête entrante
  	protected $requete;

	//Accesseur
	public function setRequete(Requete $requete)
	{
    	$this->requete = $requete;
  	}

	//Exécute l'action à réaliser
	public function executerAction($action)
	{
		if (method_exists($this, $action))
		{
      		$this->action = $action;
      		$this->{$this->action}();
    	}
		else
		{
      		$classeControleur = get_class($this);
      		throw new Exception("Action '$action' non définie dans la classe $classeControleur");
    	}
 	}

	//Méthode abstraite correspondant à l'action par défaut
	//Oblige les classes filles à redéfinir et implémenter cette action par défaut
  	public abstract function index();

	//Génère la vue associée au contrôleur courant
	protected function genererVue($donneesVue = array())
	{
    	//Détermination du nom du fichier vue à partir du nom du contrôleur actuel
    	$classeControleur = get_class($this);
    	$controleur = str_replace("Controleur", "", $classeControleur);
    	//Instanciation et génération de la vue
    	$vue = new Vue($this->action, $controleur);
    	$vue->generer($donneesVue);
	}

	//Effectue une redirection vers un contrôleur et une action spécifiques
    protected function rediriger($controleur, $action = null)
    {
        $racineWeb = Configuration::get("racineWeb", "/");
        //Redirection vers l'URL /racine_site/controleur/action
        if ($controleur == "")
        {
          header("Location:" . $racineWeb);
        }
        elseif ($action == null)
          header("Location:" . $racineWeb . $controleur);
        else
          header("Location:" . $racineWeb . $controleur . "/" . $action);
    }
}
