<?php

require("bdd_id.php");
// renvois : $sql_type, $sql_server, $sql_user, $sql_pass, $sql_db

try{
	$proprietes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	$dbconnect = new PDO($sql_type.':host='.$sql_server.';dbname='.$sql_db, $sql_user, $sql_pass, $proprietes);
	$dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "ok";
}

catch (PDOException $e) {
	print "Erreur : " . $e->getMessage() . "<br/>";
	die();
}
