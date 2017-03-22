<?php
/**
* Cette vue mette au format JSON les données envoyé par la base de donnée.
* Puis les envoyes vers ArticlesCtrl (format JS - AngularJS).
*/
require_once '../models/Database.inc.php';
//Création
$database = new Database();
//Récupération des articles
$res = $database->SelectArticle();
if($res){
  //Création d'un objet JSON
  //$view = json_encode($res);
  $view = '[';
  for ($i=0; $i < count($res); $i++) {
     $view .= '{ "title": "'  . $res[$i]->title. '",';
     $view .= '"categorie": "'  . $res[$i]->categorie. '",';
     $view .= '"resum": "'  . $res[$i]->resum. '"},';
  }
  $view = substr($view, 0, strlen($view)-1);
  $view .= "]";
  echo utf8_encode($view);
  //var_dump($view);

}
else {
  echo "<div class='alert alert-warning' role='alert'>Une erreure c'est produite</div>";
}
?>
