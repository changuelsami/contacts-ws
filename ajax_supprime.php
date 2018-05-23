<?php 
	header("Access-Control-Allow-Origin: *");
	
	require_once("bdd.inc.php");
	$id = (int)$_GET['id'];
	$q = "DELETE FROM user WHERE id='$id'";
	$res = $idcon->query($q);
	if ($idcon->affected_rows)
		print "1";
	else
		print "-1";