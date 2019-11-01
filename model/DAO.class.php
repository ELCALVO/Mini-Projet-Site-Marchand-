<?php

require_once("../model/Categorie.class.php");
require_once("../model/Caracteristique.class.php");
require_once("../model/Article.class.php");

//Classe pour ouvrir la base de données et renvoyer des objets à partir de cette base
class DAO{
  public $db;                                      //Objet local PDO de la base de données
  private $database = 'sqlite:../data/database.db'; //Type,chemin et nom de la base de données
  private $n;
  private $pr;
  private $ps;
  private $pswd;
  private $mail;

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

  function insertMembre($array) : void {
    //Creation des variables contenant les information du membre
    $this->n    = $array['nom'];
    $this->pr   = $array['prenom'];
    $this->ps   = $array['pseudo'];
    $this->pswd = $array['pass'];
    $this->email = $array['email'];
    //Preparation de la requete
    $req =$this->db->prepare("INSERT INTO membres(nom,prenom,pseudo,pass,email)
                          VALUES (:nom,:prenom,:pseudo,:pass,:email)");
   //Execution de la requete
   $req->execute(array
                  ('nom' =>$this->n,
                  'prenom' => $this->pr,
                  'pseudo' => $this->ps,
                  'pass' => $this->pswd,
                  'email' => $this->email
                ));
  }
  function connexionTry($array) : array {
    $this->ps = $array['pseudo'];
    $req = $this->db->prepare("SELECT id,pass FROM membres WHERE pseudo=:pseudo");
    $req->execute(array(
                  'pseudo' => $this->ps
    ));
    $result = $req->fetch();
    return $result;
  }






}

?>
