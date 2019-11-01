<?php
require_once('../model/Categorie.class.php');
require_once('../model/Article.class.php');
require_once('../model/Caracteristique.class.php');
require_once('../model/DAO.class.php');

$produits=new DAO('../data');

$articles = $produits->getArticles();

$categories = $produits->getCategories();

$caracteristiques = $produits->getCaracteristiques();


$categorie = $categories[1];


// creation de l'array contenant les valeurs

    $pseudo = $_POST['pseudo'];
    $resp= array(
      'pseudo' => $pseudo,
    );
// Vérification de la validité des informations

$resultat = $produits->connexionTry($resp);

// Verification du mot de passe
$isPasswordOk = password_verify($_POST['mdp'], $resultat['pass']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordOk) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
        include('../view/connexionReussie.view.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}

 ?>
