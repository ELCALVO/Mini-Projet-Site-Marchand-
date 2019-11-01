<!DOCTYPE html>
<html lang="en">
<head>
  <title>Site de produit de LUXE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../framework/connexionReussie.css"/>
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
              <?= $produits->afficherCategories($categories); ?>
            </ul>

          </div>
        </li>

        <li>
          <i class="fa fa-shopping-cart"></i>
          <a href="../controler/panier.ctrl.php">Panier</a>
        </li>

        <li>
          <i class="fas fa-user-edit"></i>
          <a href="../controler/inscription.ctrl.php">S'inscrire</a>

        </li>
        <li>
          <i class="fa fa-user-circle"></i>
          <a href="../controler/connexion.ctrl.php">Connexion</a>
        </li>
        <li>
          <i class="fa fa-phone"></i>
          <a href="#about">Contact</a>
        </li>
      </ul>
    </nav>

  </header>

  <section>
      <h2>Deconnexion Reussie</h2>
      <section>

        <div class="retour">
          <a href="../controler/main.ctrl.php">Page d'Accueil</a>
        </div>


      </section>
  </section>










</body>
