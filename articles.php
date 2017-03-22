<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <!--META-->
    <meta charset="utf-8">
    <meta >
    <!--CSS-->
    <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Drag and Drop - Articles</title>
  </head>
  <body ng-app="appDrag">
    <!--Menu-->
    <header>
      <?php include 'views/menu.php'; ?>
    </header>
    <!--END MENU-->
    <!--Section principal-->
    <section id="articles" class="container" ng-controller="ArticlesCtrl">
      <div class="row">
        <div class="col-md-12">
          <form class="form-inline" id="FormArticles">
            <div class="form-group">
             <label for="titre">Rechercher par titre</label>
             <input type="text" class="form-control input-sm" id="inputSmall" placeholder="Titre" ng-model="search.title">
           </div>
           <div class="form-group">
            <label for="theme">Rechercher par catégorie</label>
            <input type="text" class="form-control input-sm" id="inputSmall" placeholder="Catégorie" ng-model="search.categorie">
          </div>
        </form>
          <div  ng-repeat="article in articles | filter:search" id="article">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">{{article.title}}</h3>
                <span class="label label-warning">{{article.categorie}}</span>
              </div>
              <div class="panel-body">
                {{article.resum}}
                <br>
                <a href="" class="btn btn-warning btn-xs">Vers l'article</a>
              </div>
            </div>
          </div>
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
    <script type="text/javascript" src="script/ArticlesCtrl.js"></script>
    <script type="text/javascript" src="script/ngDraggable.js"></script>
  </body>
</html>
