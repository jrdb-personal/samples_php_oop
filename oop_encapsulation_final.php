<?php 
class BaseClass { 
	public function test() { 
		echo "BaseClass::test() called<br>"; 
	}
	public function moreTesting() { 
		echo "BaseClass::moreTesting() called<br>"; 
	} 
} 

class ChildClass extends BaseClass { 	
	final function moreTesting() {
		$results =  "ChildClass::moreTesting() called<br>"; 
		return $results;
	} 
}

class ChildClass2 extends ChildClass{

}

class ChildClass3 extends ChildClass2{

}

$objx = new ChildClass2;
$objx->moreTesting();
?>
