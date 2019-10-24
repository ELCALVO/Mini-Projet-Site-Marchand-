<?php
require_once('../model/Categorie.class.php');
require_once('../model/Article.class.php');
require_once('../model/Caracteristique.class.php');
require_once('../model/DAO.class.php');

$produits=new DAO('../data');

$articles = $produits->getArticles();

$categories = $produits->getCategories();

$caracteristiques = $produits->getCaracteristiques();

//Articles Aléatoires pour le Carousel
$artCarousel = array();
shuffle($articles);
for ($i =0;$i<4;$i++){
  $artCarousel[$i]=$articles[$i];
}

$catAccueil = array()
$catAccueil[0]=$categories[3];
$catAccueil[1]=$categories[5];
$catAccueil[2]=$categories[10];
$catAccueil[3]=$categories[12];

include('../view/main.view.php');
 ?>
