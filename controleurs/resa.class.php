<?php
class Resa {
	private $id, $num_billet, $id_manege, $horaire;
	
	public function __construct(){

	}
	
	//getter
	public function getId_manege(){
		return $this->id_manege;
	}
	public function getHoraire(){
		return $this->horaire;
	}
	public function getNum_billet(){
		return $this->num_billet;
	}
	public function getId(){
		return $this->id;
	}

	//setter
	public function setId_manege($manege){
		$this->id_manege = $manege;
	}
	public function setHoraire($horaire){
		$this->horaire = $horaire;
	}
	public function setNum_billet($billet){
		$this->num_billet = $billet;
	}
	
}