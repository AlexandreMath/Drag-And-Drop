<?php

/**
* Class qui sert à la connexion à la DB,
*/
class Database{
  public $connection;

  public function __construct(){
     $this->connection = new PDO('mysql:host=localhost; dbname=dragTuto', 'root','root');
     // En cas d'erreur de connection, on coupe tout et on affiche un message d'erreur
	  if (!$this->connection) {
      die("impossible d'ouvrir la base de données");
	  }
  }
  /**Cette méthode verifie que l'utilisateur est dans la DB
  * return un objet quand il y est.
  * return false si il n'y est pas.
  **/
  public function checkUser($login){
    $sql = "SELECT * FROM d_users WHERE login='$login'";
    $prepare = $this->connection->prepare($sql);
    $prepare-> execute();
    $resultat = $prepare->fetchAll(PDO::FETCH_OBJ);

    if($resultat){
      return $resultat;
    }
    return false;
  }

  /**
  * cette méthode sert à ajouter un article dans la DB
  **/
  public function ajoutArticle($idUser, $title, $categorie, $resum){
    try {
      $sql = "INSERT INTO d_articles (id_user, title, categorie, resum) VALUES ('$idUser', '$title', '$categorie', '$resum')";
      $prepare = $this->connection->prepare($sql);
  		$resultat = $prepare->execute();
      return true;

    }
    catch (Exception $ex) {
      throw new exception($ex);
    }

  }

  /**
  * cette méthode sert à selectionné des articles dans la DB
  **/
  public function SelectArticle(){
    try {
      $sql = "SELECT title, categorie, resum FROM d_articles";
      $prepare = $this->connection->prepare($sql);
      $prepare-> execute();
      $resultat = $prepare->fetchAll(PDO::FETCH_OBJ);
      return $resultat;

    }
    catch (Exception $ex) {
      throw new exception($ex);
    }

  }
}
?>
