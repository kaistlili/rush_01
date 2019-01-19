<?php

class Type {
	public	$_nom;
	public	$_bouclier;
	public	$_armes;

	public function getNom() {
		return $this->_nom;
	}
	public function getBouclier() {
		return $this->_bouclier;
	}
	public function setBouclier($n) {
		$this->_bouclier = $n;
	}

}

?>