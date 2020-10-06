<?php

interface Shape {
	public function computeArea();
	public function computePerimeter();
}

class Circle implements Shape {
	public $r;
	public $d;

	function __construct($r, $d){
		$this->r = $r;
		$this->d = $d;
	}

	function computeArea(){
		return 3.14*($this->r*$this->r);
	}

	function computePerimeter(){
		return (3.14*$this->d)/2;
	}
}

class Triangle implements Shape {
	public $b;
	public $h;
	public $s1; public $s2; public $s3;

	function __construct($b, $h, $s1, $s2, $s3){
		$this->b = $b;
		$this->h = $h;
		$this->s1 = $s1;
		$this->s2 = $s2;
		$this->s3 = $s3;
	}

	function computeArea(){
		return ($this->b*$this->h)/2;
	}

	function computePerimeter(){
		return ($this->s1 + $this->s2 + $this->s3);
	}
}

class Square implements Shape {
	public $s;

	function __construct($s){
		$this->s = $s;
	}

	function computeArea(){
		return $this->s*$this->s;
	}

	function computePerimeter(){
		return $this->s*4;
	}
}


$square = new Square(5);
$circle = new Circle(3, 6);

echo  "Square Area: ".$square->computeArea()."<br>";
echo "Square Perimeter: ".$square->computePerimeter()."<br>";

echo "Circle Area: ".$circle->computeArea()."<br>";
echo "Circumference: ".$circle->computePerimeter()."<br>";
?>