<?php
include("configuration.php");
include("fonctions.php");

if( !empty($_POST['password']) && !empty($_POST['mail'])){
  if(login($_POST['mail'],$_POST['password'])){
    session_start();
    $_SESSION['mdp'] = $_POST['password'];
    $_SESSION['mail'] = $_POST['mail'];
    date_default_timezone_set("Europe/Paris");
    $_SESSION['dateCo'] =date("Y-m-d H:i:s");
    header('Location: accueil.php');
  }
}
//$id_user = id_user($_SESSION['mdp'],$_SESSION['mail']);
//$_SESSION['id_user']=$id_user;

//date_default_timezone_set("Europe/Paris");
//echo date("Y-m-d H:i:s");
?>


<html>
<head>
  <meta charset ="utf-8"/>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title> Moke reddit </title>
</head>
<body>

<div class="container">

  <span class="border border-white "></span>

  <div class="alert alert-success">
    <h1> <p class="text-center"> Connexion </p> </h1>

        <section class='row'>
           <h1 class="col-md-8">
             <div class="form-group">
               <form action = "login.php" method = "post">
                  <label>Mail  :</label><input type = "text" name = "mail" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" class="btn btn-primary" value = " Se connecter "/><br />
               </form>
             </div>
          </h1>
        </section>


  <h4> <p align="right"> Tu n'as pas encore de compte ? <a href = "inscription.php"> Incris-toi ! </a> </h4>
  </div>





</body>
</html>
