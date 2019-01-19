<?php 

include('Type.class.php');

class Ship extends Type{

	public $hx;
	public $hy;
	public $x;
	public $y;


	public function __construct(array $kwargs) {

		if ($kwargs['type'] == 'cruiser') {
			$this->_nom = $kwargs['nom'];

			$this->_bouclier = '15';
			$this->_armes = '5d6';
			$this->hx = $kwargs['hx'];
			$this->hy = $kwargs['hy'];
			$this->x = $kwargs['x'];
			$this->y = $kwargs['y'];

		}
		else if ($kwargs['type'] == "destroyer") {
			$this->_nom = $kwargs['nom'];

			$this->_bouclier = '15';
			$this->_armes = '7d6';
			$this->hx = $kwargs['hx'];
			$this->hy = $kwargs['hy'];
			$this->x = $kwargs['x'];
			$this->y = $kwargs['y'];

		}
		else if ($kwargs['type'] == "x-wing") {
			$this->_nom = $kwargs['nom'];
 
			$this->_bouclier = '15';
			$this->_armes = '3d6';
			$this->hx = $kwargs['hx'];
			$this->hy = $kwargs['hy'];
			$this->x = $kwargs['x'];
			$this->y = $kwargs['y'];

		}
	}

	static function doc() {
		return (file_get_contents('Ship.doc.txt'));
	}

	public function getHx() {
		return $this->hx;
	}

	public function getHy() {
		return $this->hy;
	}

	public function getx() {
		return $this->x;
	}

	public function gety() {
		return $this->y;
	}

	public function setHx($n) {
		$this->hx = $n;
	}

	public function setHy($n) {
		$this->hy = $n;
	}

	public function setx($n) {
		$this->x = $n;
	}

	public function sety($n) {
		$this->y = $n;
	}
}

?>