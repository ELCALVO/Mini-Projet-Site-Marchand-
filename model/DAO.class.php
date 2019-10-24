<?php

require_once("../model/Categorie.class.php");
require_once("../model/Caracteristique.class.php");
require_once("../model/Article.class.php");

//Classe pour ouvrir la base de données et renvoyer des objets à partir de cette base
class DAO{
  private $db;                                      //Objet local PDO de la base de données
  private $database = 'sqlite:../data/database.db'; //Type,chemin et nom de la base de données

  //Fonction pour ouvrir la base de données
  function __construct() {
    try{
      $this->db = new PDO('sqlite:../data/database.db');
    } catch (Exception $e){
      echo "Une exception a été levée : Échec de l'ouverture de la base de données \n";
    }
  }

  //Fonction pour réuperer toutes les catégories
  function getCategories() : array {
    $req = "SELECT * FROM categorie";
    $resultat = $this->db->query($req);
    $categories = $resultat->fetchAll(PDO::FETCH_CLASS,"Categorie");

    return $categories;
  }

  //Fonction pour réuperer tous les articles
  function getArticles() : array {
    $req = "SELECT * FROM article";
    $resultat = $this->db->query($req);
    $articles = $resultat->fetchAll(PDO::FETCH_CLASS,"Article");

    return $articles;
  }

  //Fonction pour réuperer toutes les caractéristiques
  function getCaracteristiques() : array {
    $req = "SELECT * FROM caracteristique";
    $resultat = $this->db->query($req);
    $caracteristiques = $resultat->fetchAll(PDO::FETCH_CLASS,"Caracteristique");

    return $caracteristiques;
  }

}

?>
