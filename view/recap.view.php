<!DOCTYPE html>
<html lang="en">
<head>
  <title>Site de produit de LUXE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../framework/recap.css"/>
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
        <li class="active">
          <i class="fa fa-home"></i>
          <a  href="../controler/main.ctrl.php">Accueil</a>
        </li>
        <li ><a href="#Categorie">Catégorie</a>
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
          <a href="../controler/inscription.ctrl.php">S'inscrire</a>

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


  <section>
    <div class="Recap">

      <h2> Votre nom : </h2>
        <p><?= $nom?></p>

      <h2> Votre prenom : </h2>
        <p><?= $prenom?></p>

      <h2> Votre pseudo : </h2>
        <p><?= $pseudo?></p>

      <h2> Votre mot de passe : </h2>
        <p><?= $pass_hache?></p>

      <h2> Votre email : </h2>
        <p><?= $email?></p>




    </div>
  </section>
