<?php
include ("configuration.php");

//Connexion à la base de données
function connection() {
  return mysqli_connect($GLOBALS['DB_host'],$GLOBALS['DB_user'],$GLOBALS['DB_password'],$GLOBALS['DB_name']);
}





$q1 = "CREATE TABLE IF NOT EXISTS `etudiants` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) NOT NULL CHECK (CHARACTER_LENGTH(VALUE) >= 4),
  `age` int(4) NOT NULL 
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB;";

echo "Connexion au serveur.";

$c = connection();

echo "Création de la table etudiants.";

mysqli_query($c, $q1);
echo mysqli_info($c);
echo mysqli_error($c);
mysqli_close($c);
?>

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


 

<form action="test_2.php" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>




</body>
</html>
