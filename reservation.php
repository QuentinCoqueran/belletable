<?php
session_start();
$id = mysqli_connect("localhost","root","","belletable");
if (isset($_SESSION["login"]))
  {
    $login1 = $_SESSION["login"];
    $req1 = "select * from user where adm = 1 and login = '$login'";
    $res1 = mysqli_query($id, $req1);
    mysqli_query($id,"SET NAMES 'utf8'");
    $num_rows = mysqli_num_rows($res1);
  }
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8" />
	<head>
		<title>Nos Produits</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="assets/Stylesheets/style.css" /> 
	</head>
	<header>
        <center>
          	<?php include_once("header.php"); ?> 
  		</center>
  	</header>
	<center>
    <div class="container fond" id="qui">
        <h1 class="text-center">Présentation</h1>
        <p class="col-sm-12 col-md-12">
          <i class="fa fa-cart-arrow-down fa-3x"></i>
          <i class="fa fa-calendar-check fa-3x"></i>
        </p>
      </div>
		<form method="post" action="reservation.php">
			Assiettes
				<option>Modèle 1</option>
				<option>Modèle 2</option>
				<option>Modèle 3</option>
			<ul>Couverts
				<li>Modèle 1</li>
				<li>Modèle 2</li>
				<li>Modèle 3</li>
			</ul>
			<ul>Verres
				<li>Modèle 1</li>
				<li>Modèle 2</li>
				<li>Modèle 3</li>
			</>
			<ul>Verines et contenants
				<li>Modèle 1</li>
				<li>Modèle 2</li>
				<li>Modèle 3</li>
			<ul/>
			<input type="submit" value="Valider" name="recherche">
		</form>
		<!-- Pied de page
    ================================================== -->
    <footer>
      <div class="container-fluid reseau">
        <h4 class="adresse">Belle Table©
            <br>20, rue de la gare <br>
        75100 Paris  <br>
        01 75 02 77 14</h4>
        <a href="legal.php">Cliquez ici pour afficher les mentions légales</a>
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

</html>