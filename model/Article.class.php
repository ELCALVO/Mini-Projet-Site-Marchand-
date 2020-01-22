<?php

// Classe pour les articles vendus sur le site
class Article {
  private $ref;               // Référence de l'article
  private $intitule;          // Nom de l'article
  private $texteDescriptif;   // Description de l'article
  private $prix;              // Prix de l'article
  private $visuel;            // Lien menant vers l'image de l'article
  private $categorie;         // Catégorie de l'article
  private $caracteristiques;  // Caractéristiques de l'article

  function __construct(){
    $this->caracteristiques=array();
  }

  //Getteurs
  function getRef() : int {
    return $this->ref;
  }

  function getIntitule() : string {
    return $this->intitule;
  }

  function getTexteD() : string {
    return $this->texteDescriptif;
  }

  function getPrix() : float {
    return $this->prix;
  }

  function getVisu() : string {
    return $this->visuel;
  }

  function getCategorie() : int {
    return $this->categorie;
  }

  function getCaracteristiques() : array {
    return $this->caracteristiques;
  }

  function getCaracteristiquesN(int $n) : int {
    return $this->caracteristiques[$n];
  }

  function addCaracteristique(Caracteristique $car) : void {
    $i=0;
    foreach ($this->caracteristiques as $value) {
      $i++;
    }
    $this->caracteristiques[$i]=$car;
  }



}
?>
