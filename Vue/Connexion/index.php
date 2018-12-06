<?php $this->titre = "Page de connexion" ?>

<?php $this->banniere = 'Connexion'; ?>

<p>Entrez vos identifiants :</p>

<form action="connexion/connecter" method="post">
    <input name="login" type="text" placeholder="Votre login" required autofocus>
    <input name="mdp" type="password" placeholder="Votre mot de passe" required>
    <button type="submit">Connexion</button>
</form>

<?php if (isset($msgErreur)): ?>
    <p><?= $msgErreur ?></p>
<?php endif; ?>