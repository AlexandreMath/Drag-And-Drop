<?php
session_start();
//Vérification si l'utilisateur est connecté - si non redirection
if(!isset($_SESSION['Auth'])){
  header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
  <head>
    <!--META-->
    <meta charset="utf-8">

    <!--CSS-->
    <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="css/draggable.css">
    <title>Drag and Drop - Ajouter un article</title>
  </head>
  <body ng-app="appDrag">
    <!--Menu-->
    <header>
      <?php include 'views/menu.php'; ?>
    </header>
    <!--END MENU-->
    <!--Section principal-->
    <section class="container" ng-controller="MainCtrl">
      <h1 style="text-align:center;">Ajouter un article</h1>
      <form class="form-horizontal" action="views/AddArticle.php" method="post">
        <div class="form-group">
          <div class="col-lg-10">
            <input class="form-control" name="is_user" type="hidden" value="<?php echo $_SESSION['Auth']['id']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputText" class="col-lg-2 control-label">Titre</label>
          <div class="col-lg-10">
            <input class="form-control" name="title" placeholder="Titre" type="text">
          </div>
        </div>
        <div class="form-group">
          <label for="inputText" class="col-lg-2 control-label">Catégorie</label>
          <div class="col-lg-10">
            <input class="form-control" name="categorie" placeholder="Catégorie" type="text">
          </div>
        </div>
        <div class="form-group">
          <label for="textArea" class="col-lg-2 control-label">Résumé</label>
          <div class="col-lg-10">
            <textarea class="form-control" rows="3" name="resum" placeholder="Résumé de l'article"></textarea>
          </div>
        </div>
        <div class="form-group col-md-12" >
          <button type="submit" class="btn btn-primary" style="float:right;">Envoyer</button>
        </div>
      </form>
      <!--END FORM-->
        <ul class="draggable-objects">
            <li  ng-repeat="obj in draggableObjects" >
                <div ng-drag="true" ng-drag-data="obj" data-allow-transform="true"> {{obj.name}} </div>
            </li>
        </ul>
      <div ng-drop="true" ng-drop-success="onDropComplete1($data,$event)">
          <span class="title">Déposer le fichier ici!</span>
          <div ng-repeat="obj in droppedObjects1" ng-drag="true" ng-drag-data="obj" ng-drag-success="onDragSuccess1($data,$event)" ng-center-anchor="{{centerAnchor}}">
              {{obj.name}}
          </div>
      </div>
    </section>
    <!--END SECTION-->

    <!-- All scripts JavaScript
       ================================================== -->
    <!--ANGULARJS-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.6.1/angular-route.min.js"></script>
    <!--Script APP-->
    <script type="text/javascript" src="script/app.js"></script>
    <script type="text/javascript" src="script/ngDraggable.js"></script>
    <script type="text/javascript" src="script/MainCtrl.js"></script>
  </body>
</html>
