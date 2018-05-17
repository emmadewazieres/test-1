<?php session_start(); /* First start a session */ ?>
<!doctype html>
<html>
<head>
  <meta charset ="utf-8"/>
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title> Moke reddit </title>
</head>
<body>
 <h4> <p align="right"> Tu as déjà un compte ? <a href = "login.php"> Connecte toi ! </a> </h4>
<div class="container">
  <div class="border-bottom border-dark">
<section class='row'>
 


 

</section>
  </div>

  <span class="border border-white "></span>

  <div class="alert alert-success">
    <h1> <p class="text-center"> INSCRIPTION </p> </h1>
    <form>
        <section class='row'>
           <h1 class="col-md-2"> </h1>
           <h1 class="col-md-8">
             <div class="form-group">
<form action="Projet_inscription.php" method="post">

<hr size=4 width=66% align=center >
               <label for="pseudo"></label><input type="text" class="form-control" id="pseudo" name='pseudo'  placeholder="pseudo" required/>
		
		<label for="mail"></label><input type="email" class="form-control" id="mail" name='mail'  aria-describedby="emailHelp" placeholder="mail" required/>
		
		<label for="mdp"></label><input type="password" class="form-control" id="mdp" name='mdp' placeholder="mot_de_passe" required/>
		

             </div>
          </h1>
        </section>

        <hr size=4 width=66% align=center >
<center><input type="submit" value="Inscription" /></center>
        
    </form>
<?php

//A enlever c est juste test//
if(isset($_GET['pseudo'])){
echo  $_GET['pseudo'];
}

if(isset($_GET['mail'])){
echo $_GET['mail'];
}

if(isset($_GET['mdp'])){
echo $_GET['mdp'];
}
//fin test//
//
include ("configuration.php");

function connection() {
  return mysqli_connect($GLOBALS['DB_host'],$GLOBALS['DB_user'],$GLOBALS['DB_password'],$GLOBALS['DB_name']);
}


$c = connection();

$pseudo=$_GET['pseudo'];
$mail=$_GET['mail'];
$mdp=$_GET['mdp'];


$insertion ="INSERT INTO utilisateurs (pseudo,mail,mdp) VALUES ('$pseudo','$mail','$mdp');";

mysqli_query($c, $insertion);
echo mysqli_info($c);
echo mysqli_error($c);
		
//

?>
  </div>





</body>
</html>
