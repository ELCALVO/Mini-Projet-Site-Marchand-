<?php

require_once('../model/Categorie.class.php');
require_once('../model/Article.class.php');
require_once('../model/Caracteristique.class.php');
require_once('../model/DAO.class.php');

$produits=new DAO('../data');

$articles = $produits->getArticles();

$categories = $produits->getCategories();

$caracteristiques = $produits->getCaracteristiques();





//passwd pas haché
$pswd = $_POST['mdp'];

// Hachage du mot de passe
$pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
// creation de l'array contenant les valeurs

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];


$resp= array(
    'nom' => $nom,
    'prenom' => $prenom,
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email,
    );


// Insertion

$produits->insertMembre($resp);
include('../view/recap.view.php');

 ?>
