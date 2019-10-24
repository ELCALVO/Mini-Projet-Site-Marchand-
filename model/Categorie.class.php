<?php

// Classe pour les catégories d'articles vendus sur le site
class Categorie {
  private $id;            // Identifiant de la catégorie
  private $intitule;      // Nom de la catégorie
  private $categorieMere; // Catégorie mère de la catégorie (elle même si elle n'en possède pas)
  private $taxe;           // Taux de TVA de la catégorie

  //Getteurs
  function getId() : int {
    return $this->id;
  }

  function getIntitule() : string {
    return $this->intitule;
  }

  function getCategorieM() : int {
    return $this->categorieMere;
  }

  function getTaxe() : float {
    return $this->taxe;
  }

  function afficherElements($array) : void{
    foreach($array as $key){
      $image = $key->getVisu();
      $nom = $key->getIntitule();
      $ref = $key->getRef();
      echo"<a href=\"../controler/article.ctrl.php?ref=$ref\"><h3> $nom</h3></a>";
      echo"<a href=\"../controler/article.ctrl.php?ref=$ref\"><img src=\"../ressources/$image\" alt=\"$nom\" width:500 height:500></a>";
    }
  }
}
?>
