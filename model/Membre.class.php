<?php

// Classe pour les articles vendus sur le site
class Membre {
  private $id;               // Référence de l'article
  private $nom;          // Nom de l'article
  private $prenom;   // Description de l'article
  private $pseudo;              // Prix de l'article
  private $pass;            // Lien menant vers l'image de l'article
  private $email;         // Catégorie de l'article
  private $dateInscription;  // Caractéristiques de l'article

  function __construct(){
    $this->membre=array();
  }

  //Getteurs
  function getId() : int {
    return $this->id;
  }

  function getNom() : string {
    return $this->nom;
  }

  function getPrenom() : string {
    return $this->prenom;
  }

  function getPseudo() : string {
    return $this->pseudo;
  }

  function getPass() : string {
    return $this->pass;
  }

  function getDateInscription() : int {
    return $this->$dateInscription;
  }




}
?>
