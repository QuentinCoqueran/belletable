<?php 
	session_start();
	
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
          <div class="container-fluid toto">
    	     <h1>Belle Table</h1>
            <div class="row">
              <div class="col-lg-10">
                <ul class="nav nav-tabs">
                  <li class="hidden"><a href="#page-top"></a></li>
                  <li><img src="assets/img/logobelletable.png" width="41px" height="41px"></li>
                  <li><a href="index.php">Accueil</a></li>
                  <li><a href="#qui">Qui sommes-nous ?</a></li>
                  <li><a href="#contact">Contact</a></li> 
                  <li><a href="produits.php">Nos produits</a></li>
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
	<center>
    <body>
      <br><br>
      <div class="container fond">
        <h1 class="text-center">Notre équipe</h1>
        <img class="col-sm-12 col-md-5 col-md-push-7" src="assets/img/téléchargement.jpeg"> 
        <p class="col-sm-12 col-md-7 col-md-pull-5 txtinfo"><br><br>
        Notre équipe est composée de 40 salariés qui travaillent au sein de la société BELLETABLE, 37 à temps complet, 3 à mi-temps. Parfois, pour faire face à la charge supplémentaire, la société BELLETABLE fait appel à un ou plusieurs intérimaires.
        </p>
      </div>
      <br><br>
      <div class="container fond">
        <h1 class="text-center">Nos locaux</h1>
        <p class="col-sm-12 col-md-12 txtinfo"><br>
        Nos locaux sont situés au 20, rue de la gare 75100 Paris.<br> On y retrouve notre magasin, nos stocks ainsi que nos différents bureaux </p><br>&nbsp
      </div>

      <br><br>
      <div class="container fond">
        <h1 class="text-center">Notre équipement informatique</h1>
        <p class="col-sm-12 col-md-12 txtinfo"><br>
        Notre Notre parc informatique est simple : un PC fixe par salarié sédentaire (soit 37).Le câblage de l’ensemble du bâtiment est en catégorie 4, de type UTP supportant une bande passante de 10 Mb/s.<br> 
        3 bandeaux identiques de 24 ports chacun sont présents dans notre baie, située dans le local technique, devenu le local serveurs. 
        Les lignes EDF et ADSL arrivent dans ce même local. 
        </p><br>&nbsp
      </div>
      <br><br>
    </body>
  </center>
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



<!--#09597C-->


<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
