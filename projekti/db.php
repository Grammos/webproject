<?php 
	$user='root';
	$pass='';

	try {
		$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
	    $pdo= new PDO('mysql:host=localhost;dbname=seaworld', $user, $pass,$options);
	    

	} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>