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
      <li><a class="active" href="#home">Home</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#contact">Contact</a></li>
      <li style="float:right"><a href="#about">About</a></li>
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
        <div class="item active">
          <img src="../ressources/iPhone11.jpg" alt="Chania" width="460" height="345">
          <div class="carousel-caption">
            <h3>iPhone 11 Pro Max 512 Go</h3>
            <p>The iPhone 11 Pro Max 512 Go is one of the greatest smartphone on the market</p>
          </div>
        </div>

        <div class="item">
          <img src="../ressources/iPhone11.jpg" alt="Chania" width="460" height="345">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="../ressources/iPhone11.jpg" alt="Flower" width="460" height="345">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

        <div class="item">
          <img src="../ressources/iPhone11.jpg" alt="Flower" width="460" height="345">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
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
                <img src="../ressources/iPhone11.jpg" alt="test">
              </div>
                <div class="Nom">
                <p>High-Tech</p>
              </div>
            </div>
            <div class="deuxiemeItem">
              <div class="Image">
                <img src="../ressources/fauteuilMassant1.jpg" alt="test">
              </div>
                <div class="Nom">
                <p>Mobilier</p>
              </div>
            </div>
        </div>


        <div class="premiereLigne">
            <div class="premierItem">
              <div class="Image">
                <img src="../ressources/frigoSamsung.jpg" alt="test">
              </div>
                <div class="Nom">
                <p>Eléctro-Ménager</p>
              </div>
            </div>
            <div class="deuxiemeItem">
              <div class="Image">
                <img src="../ressources/rolex1.jpeg" alt="test">
              </div>
                <div class="a-section a-spacing-none a-text-center image-label truncate-2line">
                <p>Bijoux</p>
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
                <img src="../ressources/iPhone11.jpg" alt="test">
              </div>
                <div class="Nom">
                <p>iPhone11</p>
              </div>
            </div>
            <div class="deuxiemeItem">
              <div class="Image">
                <img src="../ressources/fauteuilMassant1.jpg" alt="test">
              </div>
                <div class="Nom">
                <p> le fauteuil Massant</p>
              </div>
            </div>
        </div>


        <div class="premiereLigne">
            <div class="premierItem">
              <div class="Image">
                <img src="../ressources/frigoSamsung.jpg" alt="test">
              </div>
                <div class="Nom">
                <p>Frigo Samsung</p>
              </div>
            </div>
            <div class="deuxiemeItem">
              <div class="Image">
                <img src="../ressources/rolex1.jpeg" alt="test">
              </div>
                <div class="a-section a-spacing-none a-text-center image-label truncate-2line">
                <p>Montre Rolex</p>
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
