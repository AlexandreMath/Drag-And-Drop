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
    <title>Drag and Drop</title>
  </head>
  <body ng-app="appDrag">
    <!--Menu-->
    <header>
      <?php include 'views/menu.php'; ?>
    </header>
    <!--END MENU-->
    <!--Section principal-->
    <section class="container">
      <h1>Title</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>

    </section>
    <!--END SECTION-->

    <!-- All scripts JavaScript
       ================================================== -->
    <!--ANGULARJS-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.6.1/angular-route.min.js"></script>
    <!--Script APP-->
    <script type="text/javascript" src="script/app.js"></script>
  </body>
</html>
