<?php
session_start();
require_once('../model/Categorie.class.php');
require_once('../model/Article.class.php');
require_once('../model/Caracteristique.class.php');
require_once('../model/DAO.class.php');
require_once('../model/Panier.class.php');

$produits=new DAO('../data');

$articles = $produits->getArticles();

$categories = $produits->getCategories();

$caracteristiques = $produits->getCaracteristiques();




$articlesPanier = array();

$refs = array_keys($_SESSION['panier']);

$i =0;
foreach($refs as $ref){
  foreach($articles as $article){
    if($article->getRef() == $ref){
      $articlesPanier[$i]=$article;
    }
  }
  $i++;
}

if(isset($_SESSION['pseudo']) && isset($_SESSION['id'])){
  include('../view/recapPanierConnecte.view.php');
}else{
  include('../view/recapPanier.view.php');
}

 ?>
