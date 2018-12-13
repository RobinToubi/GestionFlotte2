<?php $this->titre = 'Liste des centres technique'; ?>

<?php $this->banniere = 'Liste des centres techniques'; ?>

<?
if(count($centres) > 0):?>

	<?php foreach ($centres as $centre): ?>
	    <article>
	        <header>
				<a href="index.php?action=centre&idCentre=<? echo $centre['Cagrement']?>">
					<h1><?= $centre['CraisonSociale'] ?></h1>
				</a>
				<p>
					<?if(isset($centre['Ctelephone'])):?>
					Téléphone : <?echo $centre['Ctelephone']?>
					<?endif;?>
				</p>
	        </header>
	        <p></p>
	    </article>
	    <hr />
	<?php endforeach; ?>
<?else :?>
	Aucun centre technique ajouté
	<hr/>
<?endif;?>