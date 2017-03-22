<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li><a href="articles.php">Articles</a></li>

        <!--La page s'affiche que si l'utilisateur est connecté-->
        <?php if(isset($_SESSION['Auth'])){ ?>
        <li><a href="ajouter.php">Ajouter</a></li>
        <?php } ?>
        <!--Formulaire de connexion-->
        <?php if(!isset($_SESSION['Auth'])){ ?>
          <?php include 'formConnexion.php'; } else { ?><!--Si connecté le boutton de deconnexion s'affiche-->
          <li class="nav-item" style="float:right;">
            <a class="nav-link" href="controllers\ControlLogout.php">DECONNEXION</a>
          </li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav>
