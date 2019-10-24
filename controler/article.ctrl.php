<?php
require_once('../model/Categorie.class.php');
require_once('../model/Article.class.php');
require_once('../model/Caracteristique.class.php');
require_once('../model/DAO.class.php');

$produits=new DAO('../data');

$articles = $produits->getArticles();

$categories = $produits->getCategories();

$caracteristiques = $produits->getCaracteristiques();

if(isset($_GET['ref'])){
  $ref = $_GET['ref'];
  foreach ($articles as $value) {
    if($value->getRef()==$ref){
        $article = $value;
    }
  }

}
else{
  $article = $articles[0];
}




include('../view/article.view.php');
 ?>
