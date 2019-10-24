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
      <li><a class="active" href="#home">Acceuil</a></li>
      <li><a href="#Categorie">Catégorie</a></li>
      <li><a href="#panier">Panier</a></li>
      <li style="float:right"><a href="#about">Contactez-Nous</a></li>
    </ul>
  </nav>

  </header>

    <div class="article">
      <a href="../controler/main.ctrl.php">Retour</a>
      <div class="image">
          <img src="../ressources/<?= $article->getVisu() ?>" alt=<?= $article->getIntitule() ?>>
     </div>

     <div class="descArticle">
       <h2><?= $article->getIntitule() ?></h2>

       <h3>Description</h3>
       <p><?= $article->getTexteD() ?></p>

       <h3>Caractéristiques</h3>
       <p>test</p>

       <h3>Prix</h3>
       <p><?= $article->getPrix()?> €</p>

     </div>





    </div>

</body>
</html>
