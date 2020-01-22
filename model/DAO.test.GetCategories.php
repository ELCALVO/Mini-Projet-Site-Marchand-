<?php
// Test de la classe SDO_DAS_DataObject
require_once('../model/DAO.class.php');

//Création de l'objet DAO
$dao = new DAO();

//Test récuperation des catégories
$categories = $dao->getCategories();

//Affichage des categories
foreach ($categories as $value) {
  $cat=$value;
  $s="";
  while($cat->getCategorieM()!=$cat->getId()){
    $s=$s."-----";
    foreach ($categories as $val) {
      if($val->getId()==$cat->getCategorieM()){
        $cat = $val;
      }
    }
  }
  echo $s.">".$value->getId()."|".$value->getIntitule()."<br>";
}

 ?>
