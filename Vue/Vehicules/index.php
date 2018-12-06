<?php $this->titre = 'Les véhicules'; ?>

<?php $this->banniere = 'Liste des véhicules'; ?>

<?php foreach ($vehicules as $vehicule): ?>
    <article>
        <header>
			<a href="<?= "vehicules/vehicule/" . $vehicule['immat'] ?>">
				<h1><?= $vehicule['immat'] ?></h1>
			</a>
        </header>
        <p><?= $vehicule['modele'] ?></p>
    </article>
    <hr />
<?php endforeach; ?>