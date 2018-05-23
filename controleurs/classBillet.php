<?php



class Billet {

	

	private $numero;



	public function __construct() {



	}



	public function validation($numero) {

		return true;

	}



	public function setNumero($numero) {

		if (validation($numero)) {

			$this->numero = $numero;

            return $this;

		}

	}



	public function getNumero() {

		return $this->numero;

	}

}