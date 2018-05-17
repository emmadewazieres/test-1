<?php 
  include("functions.php");
  session_start();


include ("function.php");
ajoutUtilisateur($_POST["pseudo"], $_POST['mail'], $_POST['mdp']);
header("Location: Projet_inscription.php");

?>
