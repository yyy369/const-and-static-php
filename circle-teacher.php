<?php
	class circle{
		private $r;
		const PI = 3.14;
		public function __construct($r){
			$this->r = $r;
		}
		public function getZC(){
			return 2*self::PI*$this->r;
		}
		public function getMJ(){
			return self::PI*$this->r*$this->r;

		}
	}
$c = new circle(6);   
echo $c ->getZC();
echo $c ->getMJ();
?>