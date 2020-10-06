<?php
	class Books { 
		/* Member variables */ 
		public $title;
		public $price;

		function __construct(){
			$this->price = 100;
		}

		protected function setTitle($title){
			$this->title = $title;
		}

		function getTitle(){
			return $this->title;
		}

		function setPrice($price){
			$this->price = $price;
		}

		function getPrice(){
			return $this->price;
		}

	}

	class NovelSeries extends Books{
		public $numberofbooks;

		function setNumberofBooks($number){
			$this->numberofbooks = $number;
		}

		function getNumberofBooks(){
			return $this->numberofbooks;
		}

		function getTitle(){
			return $this->title."Book Series";
		}

	}

	class PromoBooks extends  NovelSeries{

		final function getPrice(){
			return $this->price/2;
		}

		function getPriceParentVersion(){
			Parent::getPrice();
		}
	}

	class BundleBooks extends PromoBooks{
		function getPriceVersionBooks(){
			Books::getPrice();

		}

	}


?>