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


 
 
<form action="test_2.php" method="get">

<hr size=4 width=66% align=center >
               <label for="pseudo"></label><input type="text" class="form-control" id="pseudo" name='pseudo' placeholder="pseudo"/>
		
		<label for="mail"></label><input type="text" class="form-control" id="mail" name='mail'  aria-describedby="emailHelp" placeholder="mail"/>
		
		<label for="mdp"></label><input type="text" class="form-control" id="mdp" name='mdp' placeholder="mot_de_passe"/>
		

<center><input type="submit" value="Inscription" /></center>
        
     
    </form>
<?php

if(isset($_GET['pseudo'])){
echo  $_GET['pseudo'];
}

if(isset($_GET['mail'])){
echo $_GET['mail'];
}

if(isset($_GET['mdp'])){
echo $_GET['mdp'];
}

include ("configuration.php");
include ("function.php");



$pseudo=$_GET['pseudo'];
$mail=$_GET['mail'];
$mdp=$_GET['mdp'];


ajoutUtilisateur($pseudo, $mail, $mdp);



  //$con = connection();
//$affiche= "SELECT * FROM utilisateurs;";
//mysqli_query($con, $affiche);
  //echo $affiche;

$con = connection();
  $stmt = mysqli_query($con, "SELECT * FROM utilisateurs where id_user=1 ");
  $assoc = mysqli_fetch_assoc($stmt);
 
  mysqli_close($con);
  
echo "<pre>";
print_r($assoc);
echo "</pre>";

foreach($assoc as $assocs){
echo $assocs['pseudo'];
}
?>
 





</body>
</html>
