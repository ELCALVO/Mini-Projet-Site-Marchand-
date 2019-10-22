<?php
// Test de la classe SDO_DAS_DataObject
require_once('../model/DAO.class.php');

//Création de l'objet DAO
$dao = new DAO();

//Test récuperation des catégories
$categories = $dao->getCategories();
$articles = $dao->getArticles();


//Affichage des articles
foreach ($categories as $value) {
  $cat=$value;
  echo ">".$value->getId()."|".$value->getIntitule()."<br>";
  foreach ($articles as $val) {
    if($val->getCategorie()==$value->getId()){
      echo "~".$val->getIntitule()."<br>";
    }
  }
  echo"<br>";
}

 ?>
