<?php $this->titre = "Administration de la flotte" ?>

<?php $this->banniere = 'Administration'; ?>

Bienvenue, <?= $login ?> !
<br>
La flotte GSB comporte actuellement <?= $nbVehicules ?> véhicules.
<br>
<?= $nbEntretiens ?> entretiens ont été réalisés sur le parc jusqu'à aujourd'hui.
<br>
<a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a>