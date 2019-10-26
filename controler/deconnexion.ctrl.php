<?php
session_start();
require_once('../model/Categorie.class.php');
require_once('../model/Article.class.php');
require_once('../model/Caracteristique.class.php');
require_once('../model/DAO.class.php');


$produits=new DAO('../data');

$articles = $produits->getArticles();

$categories = $produits->getCategories();

$caracteristiques = $produits->getCaracteristiques();

$categorie = $categories[0];

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();


include('../view/deconnexion.view.php');

?>
