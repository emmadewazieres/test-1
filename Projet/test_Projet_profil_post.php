<?php
 include("functions.php");
 include("Projet_inscription.php");
  session_start();

//ajoutUtilisateur($_POST['pseudo'], $_POST['mail'], $_POST['mot_de_passe']);

$c = connection();

$req = $bdd->prepare('INSERT INTO utilisateurs(pseudo, mail, mdp) VALUES(:pseudo, :mail, :mdp)');

$req->execute(array(

    'pseudo' => $pseudo,

    'mail' => $mail,

    'mdp' => $mdp

    ));


echo 'Le jeu a bien été ajouté !';



header('location:Projet_inscription.php');
?>
