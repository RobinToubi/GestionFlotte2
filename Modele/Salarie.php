<?php

require_once 'Framework/Modele.php';

class Salarie extends Modele
{
    //Retourne vrai ou faux si le salarié existe dans la base de données
    public function connecter($login, $mdp)
    {
        $sql = "select Sid from salarie where Smail=? and Spassword=?";
        $salarie = $this->executerRequete($sql, array($login, $mdp));
        return ($salarie->rowCount() == 1);
    }

    //Retourne un salarié de la base
    public function getSalarie($login, $mdp)
    {
        $sql = "select * from salarie where Smail=? and Spassword=?";
        $salarie = $this->executerRequete($sql, array($login, $mdp));
        if ($salarie->rowCount() == 1)
            return $salarie->fetch();  //Première ligne du résultat
        else
            throw new Exception("Aucun salarié ne correspond aux identifiants fournis");
    }
}
