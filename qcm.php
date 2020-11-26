
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
		<title> QCM Belle Table </title>
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
		<h1> Login QCM Emploi Belle Table </h1>
		<?php
		if (!isset($_POST["monbout"]))
		{
		?>
		<form method="post" action="qcm.php">
			Niveau de difficulté 1 :<input type='radio' name='niveau' value='1'>
			Niveau de difficulté 2 :<input type='radio' name='niveau' value='2'>
			<input type="submit" value="Valider" name="monbout">
		</form>
		<?php
		}
		if (isset($_POST["monbout"]))
		{
			$niveau = $_POST['niveau'];
			$_SESSION["niveau"] = $niveau;
			$id = mysqli_connect("localhost","root","","qcm_belle_table");
			mysqli_query($id, "SET NAMES 'utf8'");
			$req = "select * from questions where $niveau = niveau order by rand() limit 10";
			$res = mysqli_query($id, $req);
			?>
			<form method="post" action="qcmrep.php">
				<?php
				while ($ligne = mysqli_fetch_assoc($res))
				{
					echo "<h3>".$ligne["libelle"]."</h3>";
					echo '<br />';
					$req2 = "select * from reponse where idq =".$ligne['idq']." order by rand()";
					$res2 = mysqli_query($id, $req2);
					while ($ligne2 = mysqli_fetch_assoc($res2))
					{
						echo "<input type='radio' name='".$ligne["idq"]."' value='".$ligne2["ok"]."''>".$ligne2["libelle"]."<br />";
					}
					echo '<br /><br />';
				}
				?>
			<input type="submit" value="Valider" >
			</form>
		<?php
		}
		?>
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
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</html>