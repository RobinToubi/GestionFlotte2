<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <base href="<?= $racineWeb ?>" >
    <link rel="stylesheet" href="Contenu/style.css" />
    <title><?=$titre ?></title>
  </head>
  <body>
    <div id="global">
      <header>
        <a href="index.php"><h1>Application de gestion de la flotte</h1></a>
        <p><?=$banniere ?></p>
      </header>
      <section>
        <?=$contenu ?>
      </section>
      <footer>
        Groupe GSB - <a href="connexion">Se connecter</a>
      </footer>
    </div>
  </body>
</html>