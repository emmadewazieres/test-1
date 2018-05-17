<?php session_start(); /* First start a session */ 
 
include ("fonctions.php");
include ("configuration.php");
?>

<!doctype html>

<html>
<head>
  <meta charset ="utf-8"/>
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title> Moke reddit </title>
</head>
<body>

<div class="container">
  <div class="border-bottom border-dark">
<section class='row'>
 <h2  class="col-md-5"> <a href= "profil.php"> Profil </a> </h2>
 <h1 class="col-md-5 font-weight-bold"> Accueil </a> </h1>

 <h2  class="col-md-2"> <a href= "logout.php"> Déconnexion </a> </h2>

</section>
  </div>

  <span class="border border-white "></span>

  <div class="alert alert-success">
    <h1> <p class="text-center"> Ajouter un post </p> </h1>
    <form action="accueil.php" method="get">
        <section class='row'>
           <h1 class="col-md-2"> </h1>
           <h1 class="col-md-8">
             <div class="form-group">

		<label for="id_user"></label><input type="text" class="form-control" id="id_user" name="id_user" aria-describedby="emailHelp" placeholder="id_user"/>
		
               
		<label for="lien"></label><input type="url" class="form-control" id="lien" name="lien" aria-describedby="emailHelp" placeholder="lien" required/>
		
		<hr size=4 width=66% align=center >
		
		<label for="contenu_post"></label><input type="text" class="form-control" id="contenu_post" name="contenu_post" aria-describedby="emailHelp" placeholder="contenu_post" required/>



             </div>
          </h1>
        </section>

        <hr size=4 width=66% align=center >
        <center><button type="submit" class="btn btn-primary">POST</button></center>
    </form>
  </div>
<?php

if(isset($_GET['lien'])){
echo  $_GET['lien'];





$id_user=$_GET['id_user'];
$lien=$_GET['lien'];
$contenu_post=$_GET['contenu_post'];


//$c = connection();
//$insertion2 ="INSERT INTO posts (id_user,lien,contenu_post) VALUES ('1','$lien','barb');";

//mysqli_query($c, $insertion2);
//echo mysqli_info($c);
//echo mysqli_error($c);

//ajoutPost($id_user, $lien, $contenu_post,$nb_like,$nb_dislike);




ajoutPost($id_user,$lien,$contenu_post);
}
?>

<section class='row'>
  <section class="col-6">
    <header>
      <center>
      <h2 class="title"> <span class="badge badge-success"> Day's POSTS </span> </h2>
      </center>
    </header>
      <div class="border-bottom border-dark">
      </div>
<?php

$con = connection();
  $stmt = mysqli_query($con, "SELECT * FROM posts WHERE date >= DATE_SUB(NOW(),INTERVAL 24 HOUR)");
  $assoc = mysqli_fetch_assoc($stmt);
 
  mysqli_close($con);

while($tab = mysqli_fetch_assoc($stmt)){ 


echo "<pre>";

print_r($tab);
echo "salut";
echo $tab['lien'];

echo "</pre>";
} 
?>
  </section>

  <section class="col-6">
     <header>
       <center>
       <h2> <span class="badge badge-danger">NEWS</span> </h2>
     </center>
     </header>
     <div class="border-bottom border-dark">
     </div>

<?php
$time=time();
echo $time;
$con = connection();
  $stmt = mysqli_query($con, "SELECT * FROM posts");
  $assoc = mysqli_fetch_assoc($stmt);
 
  mysqli_close($con);

  
echo "<pre>";
foreach($assoc as $assocs){
print_r($assoc);

}
echo "</pre>";


echo strtotime($assoc['date']);
echo 'prout';

foreach($assoc as $assocs){
echo strtotime($assoc['date']);
}

foreach($assoc as $assocs){
echo $assoc['date'];
}

?>
   </section>


  </section>
    </section>
</div>
</body>
</html>
