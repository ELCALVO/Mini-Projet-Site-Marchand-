<?php
require_once('../model/Categorie.class.php');
require_once('../model/Article.class.php');
require_once('../model/Caracteristique.class.php');
require_once('../model/DAO.class.php');

$produits=new DAO('../data');

$articles = $produits->getArticles();

$categories = $produits->getCategories();

$caracteristiques = $produits->getCaracteristiques();

$categorie = $categories[0];
//Articles Aléatoires pour le Carousel
$artCarousel = array();
shuffle($articles);
for ($i =0;$i<4;$i++){
  $artCarousel[$i]=$articles[$i];
}

//Articles Aléatoires pour la section aléatoires de présentation de nos articles.
$artVitrine = array();
shuffle($articles);
for ($i =0;$i<4;$i++){
  $artVitrine[$i]=$articles[$i];
}


$catAccueil = array();
foreach ($articles as $value) {
  $cat=$value->getCategorie();
  if($cat==14){
    $catAccueil[0]=$value;
  }
  if($cat==6){
    $catAccueil[1]=$value;
  }
  if($cat==10){
    $catAccueil[2]=$value;
  }
  if($cat==12){
    $catAccueil[3]=$value;
  }
}

include('../view/main.view.php');
 ?>
