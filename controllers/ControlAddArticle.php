<?php
require_once '../models/Database.inc.php';
/**
 * Ce controller sert ajouter un aticle dans la DB
 */
class AddArticle{
  private $idUser;
  private $title;
  private $categorie;
  private $resum;
  private $database;

  /**
   * Le constructeur qui assigne aux propriétés les valeurs
   */
  public function __construct($idUser, $title, $categorie, $resum){
    $this->idUser = $idUser;
    $this->title = $title;
    $this->categorie = $categorie;
    $this->resum = $resum;
    $this->database = new Database();
  }

  /**
   * Cette méthode sauve l'article dans la DB
   * Renvoie true si réussi -- false si non
   */
  public function saveArticle(){
    //insert DB
    if ($this->database->ajoutArticle($this->idUser, $this->title, $this->categorie, $this->resum)) {
        return true;
    }
    else{
      return false;
    }
  }
}
?>
