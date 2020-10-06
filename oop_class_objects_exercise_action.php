<?php

	include("oop_class_objects_exercise_include.php");



		if (isset($grades['science']) && !empty($grades['science'])
				&& isset($grades['math']) && !empty($grades['math'])
				&& isset($grades['literature']) && !empty($grades['literature'])
				&& isset($grades['literature']) && !empty($grades['history'])
	 	   )
		{
			if ($_POST["student_type"] == "HS"){
				$studentHS = new StudentHS;
				$studentHS->setGrades($_POST['science'],$_POST['math'],$_POST['literature'],$_POST['history']);
				$grades = $studentHS->getGrades();
				echo "Your grades are: <br>";
				for($x=0;$x<4;$x++){
					echo $grades[$x]."<br>";
				}
				echo "Your average is: <br>";
				echo $studentHS->computeAverage();
				echo "Your rating is: <br>";
				echo $studentHS->displayRate($studentHS->computeAverage());
			}

			else {
				$studentCollege = new StudentCollege;
				$studentCollege->setGrades($_POST['science'],$_POST['math'],$_POST['literature'],$_POST['history']);
				$grades = $studentCollege->getGrades();
				echo "Your grades are: <br>";
				for($x=0;$x<4;$x++){
					echo $grades[$x]."<br>";
				}
				echo "Your rating is: <br>";
				echo $studentCollege->displayRate($studentCollege->computeAverage());
			}
			}
		}

		else {
			echo "One of the input is blank.";
		}


?>