<?php
require_once('../model/Categorie.class.php');
require_once('../model/Article.class.php');
require_once('../model/Caracteristique.class.php');
require_once('../model/DAO.class.php');

$produits=new DAO('../data');

$articles = $produits->getArticles();

$categories = $produits->getCategories();

$caracteristiques = $produits->getCaracteristiques();

$membres = $produits->getMembres();



// creation de l'array contenant les valeurs

    $pseudo = $_POST['pseudo'];
    $resp= array(
      'pseudo' => $pseudo,
    );

//Verification de la validité des informations
  $isPseudoOK=0;
    foreach($membres as $member){
      if($pseudo == $member->getPseudo()){
        $isPseudoOK=1;
      }
    }
// Essai de connexion seulement si pseudo dans la bdd
if($isPseudoOK==1){
  $resultat = $produits->connexionTry($resp);
  }
else{
  $resultat = 0;
}

// Verification du mot de passe
$isPasswordOk = password_verify($_POST['mdp'], $resultat['pass']);

if (!$resultat)
{
    die('Mauvais identifiant ou mot de passe ! <a href="javascript:history.back()"> Retourner a la page de connexion</a>');
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
        die('Mauvais identifiant ou mot de passe ! <a href="javascript:history.back()"> Retourner a la page de connexion</a>');
    }
}

 ?>
