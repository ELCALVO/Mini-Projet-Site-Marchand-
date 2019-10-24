<!DOCTYPE html>
<html lang="en">
<head>
  <title>Site de produit de LUXE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../framework/article.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
  <header>
    <h1>NOM DU SITE</h1>
  <nav>
    <ul>
      <li><a class="active" href="../controler/main.ctrl.php">Acceuil</a></li>
      <li><a href="#Categorie">Catégorie</a></li>
      <li><a href="#panier">Panier</a></li>
      <li style="float:right"><a href="#about">Contactez-Nous</a></li>
    </ul>
  </nav>

  </header>

  <div class="Catégories">

    <h2>Voici tous les articles de la catégorie <?= $categorie->getIntitule()?></h2> <br> <br>
    <?= $categorie->afficherElements($articleCat); ?>

  </div>

</body>
</html>
