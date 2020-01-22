<!DOCTYPE html>
<html lang="en">
<head>
  <title>Site de produit de LUXE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../framework/categorie.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
  <header>
    <h1>Lux'n Co+</h1>
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
              <?= $produits->afficherCategories($categories); ?>
            </ul>
          </div>
        </li>
        <li>
          <i class="fa fa-shopping-cart"></i>
          <a href="../controler/panier.ctrl.php">Panier</a>
        </li>
        <li>
          <i class="fa fa-phone"></i>
          <a href="#about">Contact</a>
        </li>
        <li style="float:right">
          <i class="fas fa-user-edit"></i>
          <a href="#"><?= $_SESSION['pseudo'] ?></a>
          <i class="fa fa-chevron-down"></i>
          <div class="sous-menu1">
            <ul>
              <i class="fa fa-user"></i>
              <a href="#">Profil</a>
            </ul>
            <ul>
              <i class="fa fa-power-off"></i>
              <a href="#">Deconnexion</a>
            </ul>
          </div>
        </li>
      </ul>
    </nav>

  </header>
<section>
    <div class="Categories">
      <h2>Voici tous les articles de la catégorie <?= $categorie->getIntitule()?></h2> <br> <br>
      <div class="images">
      <?= $categorie->afficherElements($articleCat); ?>
      </div>

    </div>

  </section>
</body>
</html>
