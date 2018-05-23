<?php 
	// ajax_details.php
	header("Access-Control-Allow-Origin: *");
	//header('Content-Type: application/json'); // optionnell si on indique le type de retour lors de l'appel ajax
	
	require_once("bdd.inc.php");
	$id = $_GET['id'];
	$q = "SELECT * FROM user WHERE id='$id'";
	$users = $idcon->query($q);
	if ($users->num_rows)
	{
		$user = $users->fetch_object();
		$json = json_encode($user);
		print $json;
	}
	else
		print "-1";

