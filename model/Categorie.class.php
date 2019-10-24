<?php

// Classe pour les catégories d'articles vendus sur le site
class Categorie {
  private $id;            // Identifiant de la catégorie
  private $intitule;      // Nom de la catégorie
  private $categorieMere; // Catégorie mère de la catégorie (elle même si elle n'en possède pas)
  private $taxe;           // Taux de TVA de la catégorie

  //Getteurs
  function getId() : string {
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
      echo"<h3> $nom</h3>";
      echo"<img src=\"../ressources/$image\" alt=\"$nom\">";
    }
  }
}
?>
