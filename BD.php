<?php 
try{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$db = new PDO('mysql:host=localhost;dbname=alazhar', 'root', '',$pdo_options);
	} 
	catch (Exception $e) {
		
		die('Erreur :'.$e->getmessage());
	}
 ?>
 