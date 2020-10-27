<?php
	try
	{
		$bdd= new PDO('mysql:host=localhost;dbname=pfa_porjet','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage()); 
	}
?>