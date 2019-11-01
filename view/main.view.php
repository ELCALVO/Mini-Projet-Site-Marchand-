<!DOCTYPE html>
<html lang="en">
<head>
  <title>Site de produit de LUXE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../framework/main.css"/>
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

  <div class="cover">

  </div>

  <div class="container">
    <h2>Découvrez nos produits :</h2>
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li class="item1 active"></li>
        <li class="item2"></li>
        <li class="item3"></li>
        <li class="item4"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active" id="pls">
          <img src="../ressources/<?= $artCarousel[0]->getVisu() ?>" alt=<?= $artCarousel[0]->getIntitule() ?> style="width:400px;height:350px" >
          <div class="carousel-caption">
            <h3><?= $artCarousel[0]->getIntitule() ?></h3>
            <p><?= $artCarousel[0]->getTexteD() ?></p>
          </div>
        </div>

        <div class="item">
          <img src="../ressources/<?= $artCarousel[1]->getVisu() ?>" alt=<?= $artCarousel[1]->getIntitule() ?> style="width:400px;height:350px"  >
          <div class="carousel-caption">
            <h3><?= $artCarousel[1]->getIntitule() ?></h3>
            <p><?= $artCarousel[1]->getTexteD() ?></p>
          </div>
        </div>

        <div class="item">
          <img src="../ressources/<?= $artCarousel[2]->getVisu() ?>" alt=<?= $artCarousel[2]->getIntitule() ?> style="width:400px;height:350px" >
          <div class="carousel-caption">
            <h3><?= $artCarousel[2]->getIntitule() ?></h3>
            <p><?= $artCarousel[2]->getTexteD() ?></p>
          </div>
        </div>

        <div class="item">
          <img src="../ressources/<?= $artCarousel[3]->getVisu() ?>" alt=<?= $artCarousel[3]->getIntitule() ?> style="width:400px;height:350px" >
          <div class="carousel-caption">
            <h3><?= $artCarousel[3]->getIntitule() ?></h3>
            <p><?= $artCarousel[3]->getTexteD() ?></p>
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control"  role="button">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control"  role="button">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

<div class="affichage">


  <div class="Categorie"
    <article class="Art1">
      <div class="headCategorie">
        <h2> Nos catégories</h2>
      </div>

      <div class="containerCategorie">
        <div class="premiereLigne">
            <div class="premierItem">
              <div class="Image">
              <a href="../controler/categorie.ctrl.php?Id=<?= $catAccueil[0]->getCategorie()?>"> <img src="../ressources/<?=$catAccueil[0]->getVisu()?>" alt="Coussin, plaid & pouf"> </a>
              </div>
                <div class="Nom">
                <a href="../controler/categorie.ctrl.php?Id=<?= $catAccueil[0]->getCategorie()?>"><p>Coussin, plaid & pouf</p></a>
              </div>
            </div>
            <div class="deuxiemeItem">
              <div class="Image">
                <a href="../controler/categorie.ctrl.php?Id=<?= $catAccueil[1]->getCategorie()?>">  <img src="../ressources/<?=$catAccueil[1]->getVisu()?>" alt="Télévisions"> </a>
              </div>
                <div class="Nom">
                <a href="../controler/categorie.ctrl.php?Id=2"> <p>High-Tech</p> </a>
              </div>
            </div>
        </div>


        <div class="premiereLigne">
            <div class="premierItem">
              <div class="Image">
              <a href="../controler/categorie.ctrl.php?Id=<?= $catAccueil[2]->getCategorie()?>"> <img src="../ressources/<?=$catAccueil[2]->getVisu()?>" alt="Colliers"> </a>
              </div>
                <div class="Nom">
                  <a href="../controler/categorie.ctrl.php?Id=<?= $catAccueil[2]->getCategorie()?>"><p>Colliers</p> </a>
              </div>
            </div>
            <div class="deuxiemeItem">
              <div class="Image">
                <a href="../controler/categorie.ctrl.php?Id=<?= $catAccueil[3]->getCategorie()?>">  <img src="../ressources/<?=$catAccueil[3]->getVisu()?>" alt="Tables & Chaises"> </a>
              </div>
                <div class="a-section a-spacing-none a-text-center image-label truncate-2line">
                <a href="../controler/categorie.ctrl.php?Id=<?= $catAccueil[3]->getCategorie()?>"> <p>Tables & chaises</p></a>
              </div>
            </div>
        </div>

      </div>

    </article>
  </div>

  <div class="Produit"
    <article class="Art1">
      <div class="headCategorie">
        <h2> Nos Articles</h2>
      </div>

      <div class="containerCategorie">
        <div class="premiereLigne">
            <div class="premierItem">
              <div class="Image">
                <a href="../controler/article.ctrl.php?ref=<?=$artVitrine[0]->getRef() ?>"> <img src="../ressources/<?= $artVitrine[0]->getVisu() ?>" alt=<?= $artVitrine[0]->getIntitule() ?> </a>
              </div>
                <div class="Nom">
                  <a href="../controler/article.ctrl.php?ref=<?=$artVitrine[0]->getRef() ?>"> <p><?= $artVitrine[0]->getIntitule() ?></p></a>
              </div>
            </div>
            <div class="deuxiemeItem">
              <div class="Image">
                <a href="../controler/article.ctrl.php?ref=<?=$artVitrine[1]->getRef() ?>">  <img src="../ressources/<?= $artVitrine[1]->getVisu() ?>" alt=<?= $artVitrine[1]->getIntitule() ?> </a>
              </div>
                <div class="Nom">
                <a href="../controler/article.ctrl.php?ref=<?=$artVitrine[1]->getRef() ?>"> <p><?= $artVitrine[1]->getIntitule() ?></p> </a>
              </div>
            </div>
        </div>


        <div class="premiereLigne">
            <div class="premierItem">
              <div class="Image">
                <a href="../controler/article.ctrl.php?ref=<?=$artVitrine[2]->getRef() ?>">  <img src="../ressources/<?= $artVitrine[2]->getVisu() ?>" alt=<?= $artVitrine[2]->getIntitule() ?> </a>
              </div>
                <div class="Nom">
                <a href="../controler/article.ctrl.php?ref=<?=$artVitrine[2]->getRef() ?>"> <p><?= $artVitrine[2]->getIntitule() ?></p> </a>
              </div>
            </div>
            <div class="deuxiemeItem">
              <div class="Image">
                <a href="../controler/article.ctrl.php?ref=<?=$artVitrine[2]->getRef() ?>">  <img src="../ressources/<?= $artVitrine[3]->getVisu() ?>" alt=<?= $artVitrine[3]->getIntitule() ?> </a>
              </div>
                <div class="a-section a-spacing-none a-text-center image-label truncate-2line">
                <a href="../controler/article.ctrl.php?ref=<?=$artVitrine[3]->getRef() ?>"> <p><?= $artVitrine[3]->getIntitule() ?></p> </a>
              </div>
            </div>
        </div>

      </div>

    </article>
  </div>
</div>

  <script>
  $(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();

    // Enable Carousel Indicators
    $(".item1").click(function(){
      $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
      $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
      $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
      $("#myCarousel").carousel(3);
    });

    // Enable Carousel Controls
    $(".left").click(function(){
      $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
      $("#myCarousel").carousel("next");
    });
  });
  </script>

</body>
</html>
