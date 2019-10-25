<!DOCTYPE html>
<html lang="en">
<head>
  <title>Site de produit de LUXE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../framework/article.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
  <header>
    <h1>NOM DU SITE</h1>
    <nav>
      <ul>
        <li>
          <i class="fa fa-home"></i>
          <a  href="../controler/main.ctrl.php">Accueil</a>
        </li>
        <li class="active"><a href="#Categorie">Catégorie</a>
          <i class="fa fa-chevron-down"></i>
          <div class="sous-menu1">
            <ul>
              <?= $categorie->afficherCategories($categories); ?>
            </ul>
          </div>
        </li>
        <li>
          <i class="fa fa-shopping-cart"></i>
          <a href="#panier">Panier</a>
        </li>

        <li>
          <i class="fas fa-user-edit"></i>
          <a href="#panier">S'inscrire</a>

        </li>
        <li>
          <i class="fa fa-user-circle"></i>
          <a href="#panier">Connexion</a>
        </li>
        <li>
          <i class="fa fa-phone"></i>
          <a href="#about">Contact</a>
        </li>
      </ul>
    </nav>

  </header>

    <div>
      <h2><?= $article->getIntitule() ?> de la catégorie : <a href="../controler/categorie.ctrl.php?Id=<?= $categorie->getId()?>"><?= $categorie->getIntitule() ?></a> </h2> <br> <br> <br>
    </div>

    <div class="article">



        <div class="image">
          <img src="../ressources/<?= $article->getVisu() ?>" alt=<?= $article->getIntitule() ?>>
        </div>


        <div class="descArticle">


          <h3>Description</h3>
          <p><?= $article->getTexteD() ?></p>

          <h3>Caractéristiques</h3>
          <p>test</p>

          <h3>Prix</h3>
          <p><?= $article->getPrix()?> €</p>

        </div>
    </div>

    <div class="Commentaires">
      <h3>Avis des acheteurs :</h3> <br> <br> <br>
        <p>Serena345</p>
        <article class="User1">
          <img src="../ressources/author-image1.jpg" alt="Utilisateur 1" >
          <p>Ce <?= $article->getIntitule()?> est incroyable, je ne peux plus m'en passer</p>
        </article>

        <p>MichelDu42</p>

        <article class="User2">
            <img src="../ressources/author-image2.jpg" alt="Utilisateur 2" >
            <p>Mon fils m'a acheté ce <?= $article->getIntitule()?> à vrai dire je n'était pas convaincu au début. Maintenant il est devenu indispensable</p>
        </article>

        <p>Toto974</p>

        <article class="User3">
            <img src="../ressources/comment-image1.jpg" alt="Utilisateur 3" >
            <p>Ce produit est incroyable, je ne peux plus m'en passer</p>
        </article>

        <p>LéaPassionCheval</p>

        <article class="User4">
          <img src="../ressources/comment-image2.jpg" alt="Utilisateur 4" >
          <p>Ce produit est incroyable, je ne peux plus m'en passer</p>
        </article>
    </div>
</body>
</html>
