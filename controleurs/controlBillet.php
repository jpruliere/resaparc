<?php
session_start();

$billet = $_GET['billet'];
require_once'classBillet.php';

		$r= new Billet();
// on verifi le billet
		if ($r->validation($billet)){
// si c'est bon, on redirige
			$_SESSION["billet"]=$billet;
			header('Location:../vues/gestion.php');
 			exit();
		} else {
// si non, on renvois à la connexion
			$message = 'Numero de billet non valide';
			header('Location:../vues/connexion.php?message='.urlencode($message));
			exit();
		}
