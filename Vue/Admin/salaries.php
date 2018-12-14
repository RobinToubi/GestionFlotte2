<?php $this->titre = "Admin | Salaries "; ?>

<?php $this->banniere = 'Tous les salariés'; ?>

<article>
  <h1>Liste des entretiens :</h1>
  <ul>
  <?php foreach ($salaries as $salarie): ?>
  <li>Entretien n°<?= $salarie['Sid'] ?> du <time><?= $salarie['Snom'] ?></time></li>
  <p><?= $salarie['Sprenom'] ?><?= $salarie['Srole'] ?> (<?= $salarie['Sdateajout'] ?>)</p>
  <?php endforeach; ?>
  </ul>
</article>
