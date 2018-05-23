<?php

$billet = $_GET['billet'];

require_once'classBillet.php';




		$r= new Billet();

		if ($r->validation($billet)){
		
		header('Location:../vues/listeManege.php');
 			exit();

		} else{echo('Numero non valide');}




	










