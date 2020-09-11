<?php
	session_start();

	$log = $_SESSION["login"];
	$niveau = $_SESSION["niveau"];
	$id = mysqli_connect("localhost","root","","qcm_belle_table");
	$points = 0;
	$i = 0;
	foreach ($_POST as $numq => $result)
	{
		$req = "select libelle from reponse where idq = $numq and ok = 1";
		$res = mysqli_query($id, $req);
		$ligne = mysqli_fetch_assoc($res);
		$i = $i + 1;
		if ($result == 1)
		{
			$points = $points + 1;
		}
		else
			echo "Pour la question n° ".$i." la bonne réponse était : ".$ligne["libelle"]. ".<br>";
	}
	$req2 = "insert into resultats (login, note, niveau) values ('$log', '$points', '$niveau')";
	$res2 = mysqli_query($id, $req2);
	echo "<br> Votre note est de ".$points." sur 10!";
?>
		
