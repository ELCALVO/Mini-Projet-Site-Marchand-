<?php
// Test de la classe SDO_DAS_DataObject
require_once('../model/DAO.class.php');

//Création de l'objet DAO
$dao = new DAO();

//Test récuperation des caractéristiques
$articles = $dao->getArticles();
$caracteristiques = $dao->getCaracteristiques();

//Affichage des caractéristiques
foreach ($articles as $value) {
  echo ">".$value->getRef()."|".$value->getIntitule()."<br>";
  foreach ($caracteristiques as $val) {
    if($value->getRef()==$val->getRefArticle()){
      echo "----->".$val->getId()."|".$val->getIntitule()." : ".$val->getValeur()." ".$val->getUnite()."<br>";
    }
  }
}

 ?>
