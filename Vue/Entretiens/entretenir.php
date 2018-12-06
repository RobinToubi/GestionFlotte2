<?php $this->titre = "Entretien du véhicule ".$immatriculation; ?>

<?php $this->banniere = "Ajout d\'un entretien au véhicule ".$immatriculation; ?>

<form method="post" action="<?= "entretiens/valider/" .$immatriculation ?>">
	<label for="technicien">Technicien :</label>
    <input id="technicien" name="technicien" type="text" required />
	<br />
	<label for="descriptif">Descriptif :</label>
	<br />
    <textarea id="descriptif" name="descriptif" rows="4" placeholder="Détails de l'intervention" required></textarea>
	<br />
    <input type="hidden" name="immat" value="<?= $immatriculation ?>" />
    <input type="submit" value="Ajouter cet entretien" />
</form>