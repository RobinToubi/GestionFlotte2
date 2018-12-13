<?php $this->titre = "Entretiens "; ?>

<?php $this->banniere = 'Carnet d\'entretien'; ?>

<article>
  <h1>Liste des entretiens :</h1>
  <ul>
  <?php foreach ($entretiens as $entretien): ?>
  <li>Entretien n°<?= $entretien['Eid'] ?> du <time><?= $entretien['Edate'] ?></time></li>
  <p><?= $entretien['Evehicule'] ?><?= $entretien['Edescriptif'] ?> (<?= $entretien['Etechnicien'] ?>)</p>
  <?php endforeach; ?>
  </ul>
</article>
