<?php
	class Encap{
		public $pub = 'public';
		protected $pro = 'protected';
		private $prv = 'private';

		protected function display(){
			echo $this->pub."<br>";
			echo $this->pro."<br>";
			echo $this->prv."<br>";
		}		
		public function display2(){
			$this->display();
		}
	}

	class ExtEncap extends Encap{
		public function getMembers($pub, $pro, $prv){
			$this->pub = $pub;
			$this->pro = $pro;
			$this->prv = $prv;
			return $this->pub."<br>".$this->pro."<br>".$this->prv;
		}
		public function getDisplay(){
			$this->display();
		}
		public function getThisDisplay(){
			return "<hr>".$this->pub."<br>".$this->pro."<br>".$this->prv;
		}
	}

	$objExtEncap = new ExtEncap;
	echo $objExtEncap->getMembers("public value", "protected value", "this is private")."<br>";
	echo "<hr>";
	echo $objExtEncap->getDisplay();
	echo $objExtEncap->getThisDisplay();

?>