<?php
class Billet {
	private $numero;
	public function __construct() {
	}

// verifi le billet
	public function validation($numero) {
		return true;
		//return false;
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
