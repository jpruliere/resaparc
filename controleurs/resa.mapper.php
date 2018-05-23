<?php
include_once("resa.class.php");
include("bdd_connect.php");

class resaMapper{
	
	// faire une nouvelle resa
	public function newResa($manege, $horaire, $billet){
		global $dbconnect;
		$limiteResa = $this->verifResa($billet);
		
		if($limiteResa < 3) {
			$objResa = new Resa();
			$objResa->setId_manege($manege);
			$objResa->setHoraire($horaire);
			$objResa->setNum_billet($billet);
			
			$requete = "INSERT INTO reservation (num_billet, horaire, id_manege) VALUES ('".$objResa->getNum_billet()."', '".$objResa->getHoraire()."','".$objResa->getId_manege()."')";
			$req = $dbconnect->query($requete);
		}
		else {
			echo "pas plus de 3 reservations possibles !";
		}
	}
	
	// afficher les resa
	public function affResa($billet){
		global $dbconnect;
		
		//supprime les resa passées
		$this->deleteResa($billet);
		
		//affiche une alerte
		print_r ($this->alertResa($billet));
		echo "<br>";
		
		$req = $dbconnect->prepare("SELECT id, num_billet, horaire, id_manege FROM reservation WHERE num_billet = :billet ORDER BY horaire");
		$req->execute(array('billet' => $billet));
		$data = $req->fetchAll(PDO::FETCH_CLASS, 'Resa');
		return $data;		

	}
	
	// annuler une resa
	public function annulResa($id){
		global $dbconnect;
		//$requete = "DELETE FROM reservation WHERE id =".$id;
		$req = $dbconnect->prepare("DELETE FROM reservation WHERE id =:id");
		$req->execute(array('id' => $id));
		return $req;
	}
	
	// supprimer une resa une fois passée
	private function deleteResa($billet){
		global $dbconnect;
		$heureCourante = date('H:i:s', time()-(5*60)); // retire 5 minutes a l'heure courante
		$req = $dbconnect->prepare("SELECT id, num_billet, horaire, id_manege FROM reservation WHERE num_billet = :billet AND horaire < :heure");
		$req->execute(array('heure' => $heureCourante, 'billet' => $billet));
		$data = $req->fetchAll(PDO::FETCH_CLASS, 'Resa');
		foreach($data as $resa){
			$this->annulResa($resa->getId());
		}			
	}

	// verifie que moins de 3 resa pour le billet
	private function verifResa($billet){
		global $dbconnect;
		$req = $dbconnect->prepare("SELECT count(*) FROM reservation WHERE num_billet = :billet");
		$req->execute(array('billet' => $billet));
		$data = $req->fetch();
		//print_r ($data[0]);
		return $data[0];		
	
	}

	// alerter l'utilisateur 5 minutes avant sa prochaine resa
	private function alertResa($billet){
		global $dbconnect;
		$heureCourante = date('H:i:s'); 
		$heureAlert = date('H:i:s', time()+(5*60)); // ajoute 5 minutes à l'heure courante
		
		$req = $dbconnect->prepare("SELECT id, num_billet, horaire, id_manege FROM reservation WHERE num_billet = :billet AND horaire between :heureCourante AND :heureAlert");
		$req->execute(array('heureCourante' => $heureCourante, 'heureAlert' => $heureAlert, 'billet' => $billet));
		$data = $req->fetchAll(PDO::FETCH_CLASS, 'Resa');
		return $data;
	}

}