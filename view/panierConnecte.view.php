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
    <h1>Lux'n Co+</h1>
    <nav>
      <ul>
        <li>
          <i class="fa fa-home"></i>
          <a  href="../controler/main.ctrl.php">Accueil</a>
        </li>
        <li><a href="#Categorie">Catégorie</a>
          <i class="fa fa-chevron-down"></i>
          <div class="sous-menu1">
            <ul>
              <?= $produits->afficherCategories($categories); ?>
            </ul>
          </div>
        </li>
        <li class="active">
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
              <a href="../controler/deconnexion.ctrl.php">Deconnexion</a>
            </ul>
          </div>
        </li>
      </ul>
    </nav>

  </header>

  <div class="table-responsive cart_info">
  				<table class="table table-condensed">
  					<thead>
  						<tr class="cart_menu">
  							<td class="image">Article</td>
  							<td class="description"></td>
  							<td class="price">Prix</td>
  							<td class="quantity">Quantité</td>
  							<td class="total">Total</td>
  							<td></td>
  						</tr>
  					</thead>
  					<tbody>
              <?php foreach($articlesPanier as $contPan){ ?>
    						<tr>
    							<td class="cart_product">
    								<a href=""><img src="../ressources/<?= $contPan->getVisu() ?>" alt="" height="80" width="80"></a>
    							</td>
    							<td class="cart_description">
    								<h4><a href=""><?= $contPan->getIntitule() ?></a></h4>
    								<p>Web REF: <?= $contPan->getRef() ?></p>
    							</td>
    							<td class="cart_price">
    								<p><?= $contPan->getPrix()?> €</p>
    							</td>
    							<td class="cart_quantity">
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <img src="../ressources/plus.svg" alt="">
                      </button>
                      <input type="text" name="name" value="1">
                      <button class="minus-btn" type="button" name="button">
                        <img src="../ressources/minus.svg" alt="">
                      </button>
                    </div>
    							</td>
    							<td class="cart_total">
    								<p class="cart_total_price"><?= $contPan->getPrix() ?> €</p>
    							</td>
    							<td class="cart_delete">
    								<a class="cart_quantity_delete" href="../model/supprimerPanier.php?ref=<?= $contPan->getRef() ?>"><i class="fa fa-times"></i></a>
    							</td>
    						</tr>
              <?php } ?>
  					</tbody>
  				</table>

  			</div>

        <a href="../controler/recapPanier.ctrl.php">Commander</a>
        <script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);

    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =100;
    		}

    		$input.val(value);
    	});

      $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });
    </script>
</body>
