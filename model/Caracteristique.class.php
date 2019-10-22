<?php

// Classe pour les caractéristiques des articles vendus sur le site
class Caracteristique {
  private $id;         //Identifiant de la caractéristique
  private $intitule;  // Nom de la caractéristique
  private $unite;     // Unité de la caractéristique
  private $valeur;     // Valeur de la caractéristique
  private $refArticle; //réference de l'article correspondant
  //Getteurs

  function getId() : int {
    return $this->id;
  }

  function getIntitule() : string {
    return $this->intitule;
  }

  function getUnite() : string {
    return $this->unite;
  }

  function getValeur() : float {
    return $this->valeur;
  }

  function getRefArticle() : int {
    return $this->refArticle;
  }

}
?>
