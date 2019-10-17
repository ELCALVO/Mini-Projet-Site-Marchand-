<?php

// Classe pour les caractéristiques des articles vendus sur le site
class Caracteristique {
  private $intitule;  // Nom de la caractéristique
  private $unite;     // Unité de la caractéristique
  private $valeur     // Valeur de la caractéristique

  //Getteurs

  function getIntitule() : string {
    return $this->intitule;
  }

  function getUnite() : string {
    return $this->unite;
  }

  function getValeur() : float {
    return $this->valeur;
  }


}
?>
