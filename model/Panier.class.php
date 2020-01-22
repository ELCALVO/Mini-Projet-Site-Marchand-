<?php

// Classe pour le panier d'un client
class Panier {


  function __construct(){
    if(!isset($_SESSION)){
      session_start();
    }

    if(!isset($_SESSION['panier'])){
      $_SESSION['panier'] = array();
    }

  }

  function addArticle(Article $article) : void {
    $init = 0;
    if(isset($_SESSION['panier'][$article->getRef()])){
      $init = $_SESSION['panier'][$article->getRef()];
    }
    $_SESSION['panier'][$article->getRef()] = $init+1;
  }

  function removeArticle(Article $article) : void {
    unset($_SESSION['panier'][$article->getRef()]);
  }

  function moinsArticle(Article $article) : void {
    $init = $_SESSION['panier'][$article->getRef()];
    $_SESSION['panier'][$article->getRef()] = $init-1;
  }

}
 ?>
