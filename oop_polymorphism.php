<?php 
	interface Mobility{
		function moveForward($direction, $startingpoint);
		function stopMoving();
	}
	class Animal implements Mobility{
		function moveForward($direction, $startingpoint){
			return $result = $startingpoint*4 + $direction;
		}
		function stopMoving(){
			return false;
		}
		function test(){
		}
	}
	class AutoMobile implements Mobility{
		function moveForward($direction, $startingpoint){
			return $result = $startingpoint*10 + $direction;
		}

		function stopMoving(){
			return true;
		}
	}


	$objAnimal = new Animal;
	echo $objAnimal->moveForward(5,7)."<br>";

	$objAutoMobile = new AutoMobile;
	echo $objAutoMobile->moveForward(5,7)."<br>";







?>