<?php 
	/*
	Renvoi la liste des nom qui commencent par une chaine $s donné en parametre
	*/
	header("Access-Control-Allow-Origin: *"); 
	require_once("bdd.inc.php");
	$s = $_GET['s'];
	$q = "SELECT * FROM user WHERE nom LIKE '$s%'";
	$users = $idcon->query($q);
	$liste = array();
	while ($user = $users->fetch_object())
		$liste[] = $user;

	header('Content-Type: application/json');
	print json_encode($liste);

