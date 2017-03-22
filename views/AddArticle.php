<?php
//Inclue les controllers
require_once '../controllers/ControlAddArticle.php';

//Formatage des données envoyées via le formulaire
if(!empty($_POST['is_user']) && !empty($_POST['title']) && !empty($_POST['categorie']) && !empty($_POST['resum'])){
  $idUser = htmlentities($_POST['is_user']);
  $titre  = htmlentities($_POST['title']);
  $categorie  = htmlentities($_POST['categorie']);
  $resum = htmlentities($_POST['resum']);

  $article = new AddArticle($idUser, $titre, $categorie, $resum);
  $result = $article->saveArticle();

  if ($result) {
    //Article ajouté
    echo "<script>alert('l&apos;article ajouté')</script>";
    //header('Location: ../index.php');

  }
  else {
    //Article non ajouté
    echo "<script>alert('l&apos;article n'a pas pu être ajouté')</script>";
    //header('Location: ../index.php');
  }
}
else{
  //Erreur avec les données envoyées par le formulaire
  echo "Il manque des données!";
  //header('Location: ../index.php');
}
?>
