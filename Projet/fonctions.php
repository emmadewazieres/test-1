<?php
include ("configuration.php");

//Titre du blog 
function blogTitle() {
	return $GLOBALS['blogTitle'];
}

//Connexion à la base de données
function connection() {
  return mysqli_connect($GLOBALS['DB_host'],$GLOBALS['DB_user'],$GLOBALS['DB_password'],$GLOBALS['DB_name']);
}

//Login de l'utilisateur
function login($mail,$mdp){
	$con=connection();
	$q = mysqli_query($con,'SELECT * FROM utilisateurs');
	
	while($tab = mysqli_fetch_assoc($q))
	{
		if($mdp == $tab['mdp'] && $mail == $tab['mail'])
		{
			mysqli_free_result($q);
			mysqli_close($con);
			return 1;
		}
	}
	mysqli_free_result($q);
	mysqli_close($con);
	return 0;
}



// Ajoute un utilisateur
function ajoutUtilisateur($pseudo, $mail, $mdp) {
  $con = connection();
  $stmt = mysqli_prepare($con, "INSERT INTO utilisateurs (pseudo,mail,mdp) VALUES (?,?,?)");
  mysqli_stmt_bind_param($stmt, 'sis', $pseudo, $mail, $mdp);
  mysqli_stmt_execute($stmt);
  mysqli_close($con);
}


// Ajoute un post
function ajoutPost($id_user, $lien, $contenu_post) {
  $con = connection();
  $stmt = mysqli_prepare($con, "INSERT INTO posts (id_user,lien,contenu_post) VALUES ('".$id_user."','".$lien."','".$contenu_post."')");
  mysqli_stmt_execute($stmt);
  mysqli_close($con);
}

// Affiche les posts récents (du + récents au - récents)
function affiche_post_recent(){
  $con = connection();
  $stmt = mysqli_query($con, "SELECT * FROM posts WHERE date >= DATE_SUB(NOW(),INTERVAL 24 HOUR) ORDER BY date DESC");
  $qqch= mysqli_fetch_assoc($stmt); 
return($qqch);


mysqli_close($con);

}
?>
