<?php
session_start();
require_once "../models/Database.inc.php";

	/**
    * Traite les données envoyées par le visiteur via le formulaire de connexion
    * (variables $_POST['login'], $_POST['password']).
    * Le login est vérifié en utilisant les méthodes de la classe Database.
    * Si la vérification est réussie,
    * le pseudo est affecté à la variable de session.
    */

if(!empty($_POST['user']) && !empty($_POST['password'])){

	//formatage des données envoyé via le formulaire
  $login = htmlentities($_POST['user']);
  $password = htmlentities($_POST['password']);

  //Création de l'objet database
  $Database = new Database();

	//Recuperaction des données dans la DB
	$user = $Database->checkUser($login);

	//Verification que le login envoyé par le formulaire est strictement le même que celui dans la DB.
	if ($user[0]->login === $login) {

		//verification que le mot de passe envoyé par le formulaire est le même que celui dans la DB.
		//$verifPas = $secur->decrypter($passHash);

	  if($user[0]->password === $password){

	  	$_SESSION ['Auth'] = array(
								'id' => $user[0]->id,
	              'login' => $login,
	              );
			echo "<script>alert('Vous êtes bien inscrit, merci')</script>";
	    header('Location: ../index.php');
	  }
	}

  else{
      echo "<script>alert('Vous n\'êtes pas inscrit')</script>";
			header('Location: ../index.php');
    	}
}//END 1 IF

else{
  echo "<script>alert('Il manque des données')</script>";
}

?>
