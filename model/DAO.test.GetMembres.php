<?php
// Test de la classe SDO_DAS_DataObject
require_once('../model/DAO.class.php');

//Création de l'objet DAO
$dao = new DAO();

//Test récuperation des articles
$membres = $dao->getMembres();


//Affichage des articles
foreach ($membres as $value) {
  var_dump($value);
  echo"<br>";
}

 ?>
