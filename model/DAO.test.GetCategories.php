<?php
// Test de la classe SDO_DAS_DataObject
require_once('../model/DAO.class.php');

//Création de l'objet DAO
$dao = new DAO();

//Test récuperation des catégories
$categories = $dao->getCategories();

//Affichage des trois premières categories
for($i=0;$i=<3;$i++){
  $cat=$categories[$i];
  while($cat->getCategorieM()->getId()!=1){
    echo "\t";
    foreach ($categories as $value) {
      if($value->getId()==$cat->getCategorieM()->getId()){
        $cat = $value;
      }
    }
  }
  echo $cat->getId()."|".$cat->getIntitule()."\n";
}

 ?>
