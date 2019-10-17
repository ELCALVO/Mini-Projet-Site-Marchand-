<?php
// Test de la classe SDO_DAS_DataObject
require_once('../model/DAO.class.php');

//Création de l'objet DAO
$dao = new DAO();

//Test récuperation des catégories
$categories = $dao->getCategories();

//Affichage des trois premières categories
foreach ($categories as $value) {
  $cat=$value;
  while($cat->getCategorieM()!=$cat->getId()){
    echo "-----";
    foreach ($categories as $val) {
      if($val->getId()==$cat->getCategorieM()){
        $cat = $val;
      }
    }
  }
  echo ">".$value->getId()."|".$value->getIntitule()."<br>";
}

 ?>
