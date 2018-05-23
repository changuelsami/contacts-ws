<?php 
	header("Access-Control-Allow-Origin: *"); 
	require_once("bdd.inc.php");
	$q = "SELECT * FROM user";
	$users = $idcon->query($q);
	$liste = array();
	while ($user = $users->fetch_object())
		$liste[] = $user;

	header('Content-Type: application/json');
	print json_encode($liste);

