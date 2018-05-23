<?php
	header("Access-Control-Allow-Origin: *");

	require_once("bdd.inc.php");
	$q = "INSERT INTO user(nom, prenom, email) VALUES(?,?,?)";
	$stmt = $idcon->prepare($q);
	$stmt->bind_param("sss", 
					$_GET['nom'],  
					$_GET['prenom'],
					$_GET['email']);
	$stmt->execute(); // or die($idcon->error); // ça lance bien le die
	$n = $stmt->affected_rows; //retourne -1 si erreur requete
	//exit(" n = " . $n);
	if ($n > 0)
		$retour = $idcon->insert_id;
	else
		$retour = -1;

	print $retour;


?>
