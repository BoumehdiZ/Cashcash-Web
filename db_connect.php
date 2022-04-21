<?php
	//connexion à la base de données
	$host = "localhost";
	$user = "zeydkrsv_ppe";
	$password = "zeydboumehdi";
	$nom_db = "zeydkrsv_ppe";
	$bdd = mysqli_connect($host, $user, $password, $nom_db) or die("Error " . mysqli_error($con));
?>