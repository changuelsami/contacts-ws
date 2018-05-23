<?php
	header("Access-Control-Allow-Origin: *");
	
	require_once("bdd.inc.php");
	$q = "UPDATE user SET nom=?, prenom=?, email=? WHERE id=?";
	$stmt = $idcon->prepare($q);
	$stmt->bind_param("sssi", 
					$_GET['nom'],  
					$_GET['prenom'],
					$_GET['email'],
					$_GET['id']);
	$stmt->execute(); // or die($idcon->error); // ça lance bien le die
	$n = $stmt->affected_rows; //retourne -1 si erreur requete
	//exit(" n = " . $n);
	if ($n > 0)
		$retour = 1;
	else
		$retour = -1;

	print $retour;
?>
