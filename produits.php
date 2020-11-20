<?php 
	session_start();
  if (isset($_SESSION["login"]))
  {
    $login1 = $_SESSION["login"];
    $req1 = "select * from user where adm = 1 and login = '$login'";
    $res1 = mysqli_query($id, $req1);
    mysqli_query($id,"SET NAMES 'utf8'");
    $num_rows = mysqli_num_rows($res1);
  }
  $id = mysqli_connect("localhost","root","","belletable");
  $req = "select * from articles";
  $res = mysqli_query($id, $req);
  mysqli_query($id,"SET NAMES 'utf8'");
	
?>

<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="assets/Stylesheets/style.css" /> 
		<meta charset="utf-8" />
		<title> Belletable </title>
	</head>

      <!-- Navigation
      ================================================== -->
    <body>
    <header>
        <center>
          	<div class="container-fluid toto nav">
				<h1>
					<div class="col-lg-2">
						<div class="col-lg-6"><img class="ico" src="assets/img/logobelletable.png" ></div>
						<div class="col-lg-6"></div>
					</div>
					<div class="col-lg-offset-2 col-lg-3 belletable">Belle Table</div>
				</h1>
				
            	<div class="row">
					
              		<div class="col-lg-10">
                		<ul class="nav nav-tabs">
                  			<li class="hidden"><a href="#page-top"></a></li>
                  			<li><a href="index.php">Accueil</a></li>
                  			<li><a href="informations.php">Qui sommes-nous ?</a></li>
                  			<li><a href="index.php">Contact</a></li> 
                  			<li><a href="produits.php">Nos produits</a></li>
                  			<li><a href="offresemploi.php">Nos offres d'emplois</a></li>
                		</ul>
              		</div>
            		<div class="col-lg-2 nav">
        				<ul class="nav nav-tabs">
        	 				<?php if (!isset($_SESSION["login"])) {?>
        	 					<li><a href="connexion.php" >Connexion</a></li>
    			 				<li><a href="inscription.php">Inscription</a></li>
        	 				<?php }else { ?>
        	 					<li><a href="profil.php"><?php echo "Bonjour ".$_SESSION["nom"]." ".$_SESSION["prenom"]." !"; ?></a></li>
        	 					<li><a href="deconnexion.php">Deconnexion</a></li>
                    <?php if ($num_rows > 0) {?>
                      <li><a href="admin.php">Partie administrateur</a></li>
                    <?php } ?>
    			 			<?php } ?>
    	   				</ul>
    				</div>
  				</div>
  			</div>
    </header> 
    <h1>Nos Produits</h1>
    </center>
  <div class="row">
    <div class="col-lg-12 jumbotron">
      <?php
      $i = 1;
        while ($ligne = mysqli_fetch_assoc($res))
        {
          if ($i % 3 == 0)
          {
            echo "<div class='row'><div class='col-lg-4 text-center border border-secondary'>
            &nbspTitre:&nbsp&nbsp".$ligne["designation"]."<br><br>
            <img class='produits' src=assets/img/".$ligne["img"]."><br><br>
            &nbspConditionnement :&nbsp&nbsp".$ligne["conditionnement"]."<br>
            &nbspQuantité disponible :&nbsp&nbsp".$ligne["quantite_dispo"]."<br>
            &nbspPrix achat :&nbsp&nbsp".$ligne["prix_vente"]."€<br>
            &nbspPrix de la location/jour:&nbsp&nbsp".$ligne["prix_location"]."€<br><br></div></div>";
          }
          else
          {
            echo "<div class='col-lg-4 text-center border border-secondary'>
            &nbspTitre:&nbsp&nbsp".$ligne["designation"]."<br><br>
            <img class='produits' src=assets/img/".$ligne["img"]."><br><br>
            &nbspConditionnement :&nbsp&nbsp".$ligne["conditionnement"]."<br>
            &nbspQuantité disponible :&nbsp&nbsp".$ligne["quantite_dispo"]."<br>
            &nbspPrix achat :&nbsp&nbsp".$ligne["prix_vente"]."€<br>
            &nbspPrix de la location/jour:&nbsp&nbsp".$ligne["prix_location"]."€<br></div>";
          }
          $i++;
        }
      ?>
    </div>
  </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>