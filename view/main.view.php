<!DOCTYPE html>
<html lang="en">
<head>
  <title>Site de produit de LUXE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../framework/main.css"/>
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
          <img src=<?= $artCarousel[0]->getVisu() ?> alt=<?= $artCarousel[0]->getIntitule() ?>  width="300px" height="300px">
          <div class="carousel-caption">
            <h3>iPhone 11 Pro Max 512 Go</h3>
            <p>L'iPhone 11 Pro Max 512 Go est l'un des meilleurs smartphone disponible sur le marché</p>
          </div>
        </div>

        <div class="item">
          <img src=<?= $artCarousel[1]->getVisu() ?> alt=<?= $artCarousel[1]->getIntitule() ?>  width="250px" height="250px">
          <div class="carousel-caption">
            <h3>Fauteuil Massant</h3>
            <p>Ce fauteuil Massant sera là pour vous apres une longue journée de travail.</p>
          </div>
        </div>

        <div class="item">
          <img src=<?= $artCarousel[2]->getVisu() ?> alt=<?= $artCarousel[2]->getIntitule() ?>  width="400px" height="400px">
          <div class="carousel-caption">
            <h3>Frigo connecté</h3>
            <p>Ce frigo connecté est à la pointe de la technologie.</p>
          </div>
        </div>

        <div class="item">
          <img src=<?= $artCarousel[3]->getVisu() ?> alt=<?= $artCarousel[3]->getIntitule() ?>  width="300px" height="250px">
          <div class="carousel-caption">
            <h3>Bague en diamant</h3>
            <p>Magnifique bague ornée de diamants.</p>
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button">
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
              <a href="#High-Tech"> <img src="../ressources/iphone12.png" alt="iPhone 11 pro max"> </a>
              </div>
                <div class="Nom">
                <a href="#High-Tech"><p>High-Tech</p></a>
              </div>
            </div>
            <div class="deuxiemeItem">
              <div class="Image">
                <a href="#Mobilier">  <img src="../ressources/fauteuilMassant2.png" alt="fauteuil Massant"> </a>
              </div>
                <div class="Nom">
                <a href="#Mobilier"> <p>Mobilier</p> </a>
              </div>
            </div>
        </div>


        <div class="premiereLigne">
            <div class="premierItem">
              <div class="Image">
              <a href="#Electro-Menager"> <img src="../ressources/Frigo1.png" alt="test"> </a>
              </div>
                <div class="Nom">
                  <a href="#Electro-Menager"><p>Eléctro-Ménager</p> </a>
              </div>
            </div>
            <div class="deuxiemeItem">
              <div class="Image">
                <a href="#Bijoux">  <img src="../ressources/bijou1.png" alt="test"> </a>
              </div>
                <div class="a-section a-spacing-none a-text-center image-label truncate-2line">
                <a href="#Bijoux"> <p>Bijoux</p></a>
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
                <a href="#iPhone11">  <img src="../ressources/iphone12.png" alt="test"> </a>
              </div>
                <div class="Nom">
                <a href="#Categories-HighTech"><p>High-Tech</p></a>
              </div>
            </div>

            <div class="deuxiemeItem">
              <div class="Image">
                <a href="#Fauteuil"><img src="../ressources/fauteuilMassant2.png" alt="Mobilier Image"></a>
              </div>
                <div class="Nom">
                  <a href="#Fauteuil"><p> Le Fauteuil Massant</p> </a>
              </div>
            </div>
        </div>


        <div class="premiereLigne">
            <div class="premierItem">
              <div class="Image">
              <a href="#frigo">  <img src="../ressources/Frigo1.png" alt="test"></a>
              </div>
                <div class="Nom">
                <a href="#Frigo1"> <p>Frigo connecté</p> </a>
              </div>
            </div>

            <div class="deuxiemeItem">
              <div class="Image">
                <a href="#Bague"><img src="../ressources/bijou1.png" alt="test"> </a>
              </div>
                <div class="a-section a-spacing-none a-text-center image-label truncate-2line">
                  <a href="#Bague"><p>Bague en diamant</p></a>
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
