<?php

require_once("../model/Categorie.class.php");
require_once("../model/Caracteristique.class.php");
require_once("../model/Article.class.php");
require_once("../model/Membre.class.php");

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

  //Fonction pour récuperer toutes les catégories
  function getCategories() : array {
    $req = "SELECT * FROM categorie";
    $resultat = $this->db->query($req);
    $categories = $resultat->fetchAll(PDO::FETCH_CLASS,"Categorie");

    return $categories;
  }

  //Fonction pour récuperer tous les articles
  function getArticles() : array {
    $req = "SELECT * FROM article";
    $resultat = $this->db->query($req);
    $articles = $resultat->fetchAll(PDO::FETCH_CLASS,"Article");

    return $articles;
  }

  //Fonction pour récuperer toutes les caractéristiques
  function getCaracteristiques() : array {
    $req = "SELECT * FROM caracteristique";
    $resultat = $this->db->query($req);
    $caracteristiques = $resultat->fetchAll(PDO::FETCH_CLASS,"Caracteristique");

    return $caracteristiques;
  }

  //Fonction pour réuperer tous les membres
  function getMembres() : array {
    $req = "SELECT * FROM membres";
    $resultat = $this->db->query($req);
    $membres = $resultat->fetchAll(PDO::FETCH_CLASS,"Membre");

    return $membres;
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



  function afficherCategories($array) : void{
    foreach($array as $categorie){
      $id = $categorie->getId();
      $nom= $categorie->getIntitule();
      echo"<li><a href=\"../controler/categorie.ctrl.php?Id=$id\">$nom</a></li>";
    }
  }


  function commandePanier($array) : void {
    $prixTot=0;
    echo"<h2> Vous avez commandé : </h2>";
    foreach($array as $contenuPanier){
      $img = $contenuPanier->getVisu();
      $name = $contenuPanier->getIntitule();
      $price =$contenuPanier->getPrix();
      echo "<section>";
        echo "<div>";
          echo "<div class=\"nom\">";
            echo" <h3> $name";
          echo "</div>";

          echo "<div class=\"image\">";
            echo" <img src=\"../ressources/$img \" alt=$name  >";
          echo "</div>";

          echo "<div class=\"Prix\">";
            echo" <h3> Prix : $price € ";
          echo "</div>";

        echo "</div>";
      echo "</section>";
      $prixTot+=$price;
    }

    echo "<h3> Prix total : $prixTot € TTC</h3>";
  }

}

?>
