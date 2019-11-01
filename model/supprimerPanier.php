<?php
session_start();
require_once('../model/Categorie.class.php');
require_once('../model/Article.class.php');
require_once('../model/Caracteristique.class.php');
require_once('../model/DAO.class.php');
require_once('../model/Panier.class.php');

$panier = new Panier();

$produits=new DAO('../data');

$articles = $produits->getArticles();

$categories = $produits->getCategories();

$caracteristiques = $produits->getCaracteristiques();
$categorie = $categories[0];


if(isset($_GET['ref'])){
  foreach($articles as $article){
      if($_GET['ref'] == $article->getRef()){
        $produit = $article;
      }
  }
}

 $panier->removeArticle($produit);
die('Produit supprimé du panier <a href="javascript:history.back()"> Retourner sur le catalogue</a>');
 ?>
