	<?php
session_start();
if(isset($_POST["bout"]))
{
	$login = $_POST["login"];
	$mdp = $_POST["mdp"];
	$id = mysqli_connect("localhost","root","","belletable");
	$req = "select * from user where login='$login' and mdp='$mdp'";
	$res = mysqli_query($id,$req);
	$transfert = mysqli_fetch_array($res);
	$_SESSION["nom"] = $transfert["nom"];
	$_SESSION["prenom"] = $transfert["prenom"];
  $_SESSION["login"] = $transfert["login"];
  $_SESSION["mail"] = $transfert["mail"];
  $_SESSION["numero"] = $transfert["numero"];
  $_SESSION["rue"] = $transfert["rue"];
  $_SESSION["code_postal"] = $transfert["code_postal"];
  $_SESSION["ville"] = $transfert["ville"];
	if(mysqli_num_rows($res) > 0)
	{
		$_SESSION["login"] = $login;
		$res2 = mysqli_query($id,$req2);
		header("location: acceuil.php");
	}else{
		$erreur = "<h3> Erreur login ou mot de passe invalide </h3>";
	}
}

?>
<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="assets/Stylesheets/style.css" /> 
		<meta charset="utf-8" />
		<title> Belletable </title>
	</head>
	<header>
        <center>
          <div class="container-fluid ">
    	     <h1>Belle Table</h1>
            <div class="row toto">
              <div class="col-lg-10">
                <ul class="nav nav-tabs">
                  <li class="hidden"><a href="#page-top"></a></li>
                  <li><img src="assets/img/logobelletable.png" width="41px" height="41px"></li>
                  <li><a href="acceuil.php">Accueil</a></li>
                  <li><a href="informations.php">Qui sommes-nous ?</a></li>
                  <li><a href="acceuil.php">Contact</a></li> 
                  <li><a href="#produit">Nos produits</a></li>
                  <li><a href="offresemploi.php">Nos offres d'emplois</a></li>
                </ul>
              </div>
            <div class="col-lg-2">
        	<ul class="nav nav-tabs">
        	 <?php if (!isset($_SESSION["login"])) {?>
        	 <li><a href="connexion.php" >Connexion</a></li>
    			 <li><a href="inscription.php">Inscription</a></li>
        	 <?php }else { ?>
        	 <li><a href="profil.php"><?php echo "Bonjour ".$_SESSION["nom"]." ".$_SESSION["prenom"]." !"; ?></a></li>
        	 <li><a href="deconnexion.php">Deconnexion</a></li> 
    			 <?php } ?>
    	   </ul>
    	</div>
  		</div>
  	</div>
  </center>
  </header>
	<body>
	<center>
	<h1> Connexion </h1>
	<form action="connexion.php" method="post">
	<?php if(isset($erreur)) echo $erreur;?>
	Login : <input type="text" name="login" ><br><br>
	Mot de passe : <input type="password" name="mdp" ><br><br>
	<input type="submit" value="Connexion" name="bout">
	</form>
	<!-- Pied de page
    ================================================== -->
    <footer>
      <div class="container-fluid reseau">
        <h4 class="adresse">Belle Table©
            <br>20, rue de la gare <br>
        75100 Paris  <br>
        01 75 02 77 14</h4>
        <div> 
          <a class="btn reseau" href="#"><i class="fa fa-twitter fa-2x"></i></a>
          <a class="btn reseau" href="#"><i class="fa fa-facebook fa-2x"></i></a>
          <a class="btn reseau" href="#"><i class="fa fa-google-plus fa-2x"></i></a>
          <a class="btn reseau" href="#"><i class="fa fa-flickr fa-2x"></i></a>
          <a class="btn reseau" href="#"><i class="fa fa-spotify fa-2x"></i></a>
        </div>
      </div>
    </footer>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
