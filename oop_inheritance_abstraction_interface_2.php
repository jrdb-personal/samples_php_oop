<?php 
	abstract class Vehicle{
		public $wheels;
		public $machine;
		public $speed;

		public $volume;
		public $channel;

		function __construct(){
		}
		abstract public function doStart($speed);
		abstract public function doStop();
		function __destruct(){
		}
	}

	class aerialVehicle extends Vehicle{
		public $landing;

		public function doStart($speed){
			$this->machine = 1;
			$this->speed = $speed;
			return $speed*2;
			//return $this->channel = $speed*4;
		}

		public function doStop(){
			$this->landing = true;
			$this->machine = 0;

		}
	}

	class landVehicle extends Vehicle{
		var $break;
		
		public function doStart($peed){
			$this->machine = 1;
			$this->speed = $speed;
			//return $this->volume = $speed*2;
			return $speed*4;
		}

		public function doStop(){
			$this->break = true;
			$this->machine = 0;
		}
	}


	interface Audio {
		function setVolume($volume);
	}

	interface Video{
		function setChannel($channel);
	}

	class Jet implements Audio, Video{
		public function __construct(){
				
		}
		
		public function setVolume($volume){
			return 'Current Volume is ' .$volume;
		}

		public function setChannel($channel){
			return 'Current Channel is ' .$channel;
		}
	}

	class Pickup implements Audio{
		public function __construct(){
				
		}

		public function setVolume($volume){
			return 'Current Volume is ' .$volume;
		}
	}


	class Application {
		public $vehicle;
		public $media;

		public function __construct(Vehicle $vehicle, Video $video){
			$this->vehicle = $vehicle;
			$this->media = $video;
		}

		public function doSomething($value){
			$action = $this->vehicle->doStart($value);
			return $this->media->setChannel($action);

		}
	}

$app = new Application(new aerialVehicle, new Jet);
echo $app->doSomething(10) . "<br>";



?>