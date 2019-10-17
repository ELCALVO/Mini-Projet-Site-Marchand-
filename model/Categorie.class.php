<?php

// Classe pour les catégories d'articles vendus sur le site
class Categorie {
  private $id;            // Identifiant de la catégorie
  private $intitule;      // Nom de la catégorie
  private $categorieMere; // Catégorie mère de la catégorie (elle même si elle n'en possède pas)
  private $taxe           // Taux de TVA de la catégorie

  //Getteurs
  function getId() : int {
    return $this->id;
  }

  function getIntitule() : string {
    return $this->intitule;
  }

  function getCategorieM() : Categorie {
    return $this->categorieMere;
  }

  function getTaxe() : float {
    return $this->taxe;
  }


}
?>
