<?php

	include("oop_class_books.php");
	
	$objA = new Books;
	$objA->setTitle("The Book");
	echo "The title of the book is: ".$objA->getTitle()."<br>";
	echo "The price of The Book is: ".$objA->getPrice()."<br>";
	$objA->setPrice(200);
	echo "The price of The Book is: ".$objA->getPrice()."<br>";


	$objB = new Books;
	$objB->setTitle("My Book");
	echo "The title of the book is: ".$objB->getTitle()."<br>";


	$objNovelSeries = new NovelSeries;
	$objNovelSeries->setTitle("LOTR Trilogy");
	echo "The title of the book is: ".$objNovelSeries->getTitle()."<br>";
	echo "The price of the book is: ". $objNovelSeries->getPrice()."<br>";
	$objNovelSeries->setNumberofBooks(3);
	echo "The number of books included is: ".$objNovelSeries->getNumberofBooks()."<br>";

	$objPromo = new PromoBooks;
	$objPromo->setTitle("Snow While and the 7 Dwarves");
	echo "The title of the book is: ".$objPromo->getTitle()."<br>";
	$objPromo->setPrice(300);
	echo "The price of the book is: ". $objPromo->getPrice()."<br";

?>