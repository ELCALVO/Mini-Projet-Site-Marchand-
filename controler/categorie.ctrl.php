<?php
require_once('../model/Categorie.class.php');
require_once('../model/Article.class.php');
require_once('../model/Caracteristique.class.php');
require_once('../model/DAO.class.php');

$produits=new DAO('../data');

$articles = $produits->getArticles();

$categories = $produits->getCategories();

$caracteristiques = $produits->getCaracteristiques();

$i=0;
$articleCat = array();
$catFilles = array();
if(isset($_GET['Id'])){
  $Id = $_GET['Id'];
  foreach ($categories as $value) {
    if($value->getId()==$Id){
        $categorie = $value;
    }
  }

}
else{
  $categorie = $categories[0];
}

if($categorie->getId()==1){
    $articleCat=$articles;

}
else{
  $catFilles= $categorie->getCategoriesF($categories);
foreach ($catFilles as $key) {
  for ($i=0; $i < sizeof($articles) ; $i++) {
    if($key->getId()==$articles[$i]->getCategorie()){
      array_push($articleCat,$articles[$i]);
      }

    }
  }
}



include('../view/categorie.view.php');
 ?>
