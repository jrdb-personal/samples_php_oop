<?php

Class Student{

	public $subjectGrade1;
	public $subjectGrade2;
	public $subjectGrade3;
	public $subjectGrade4;
	public $studentType;
	public $gradeAverage;

	public function setGrades($subject1, $subject2, $subject3, $subject4){
		$this->subjectGrade1 = $subject1;
		$this->subjectGrade2 = $subject2;
		$this->subjectGrade3 = $subject3;
		$this->subjectGrade4 = $subject4;
	}	

	public function getGrades(){
		$subjectGradesList = [$this->subjectGrade1, $this->subjectGrade2, $this->subjectGrade3, $this->subjectGrade4];
		return $subjectGradesList;
	}

	function displayRate($average){
		if ($average < 80) {
			return  "<font color='Red'>". $average." - Failed". "</font>";
		}

		else if($average >= 80 && $average < 90){
			if ($average >=80 && $average <86){
				return "<font color='Blue'>". $average." - Passed-A" . "</font>";
			}
			else {
				return "<font color='Blue'>". $average." - Passed-B". "</font>";
			}
		}

		else if ($average >= 90 && $average < 96){
			return "<font color='Green'>". $average." - Exceeds Expectations" . "</font>";
		}

		else {
			return "<font color='Green'>". $average." - Outsanding". "</font>";
		}

	}
}


Class StudentHS{
	public function computeAverage{
		$this->gradeAverage = ($this->subjectGrade1 + $this->subjectGrade2 + $this->subjectGrade3 + $this->subjectGrade4)/4;
		return $this->gradeAverage;
	}
}


Class StudentCollege{
	public function computeAverage{
		$this->gradeAverage = ($this->subjectGrade1*1.5 + $this->subjectGrade2*1.2 + $this->subjectGrade3*1.2 + $this->subjectGrade4)/4;
		return $this->gradeAverage;
	}
}




?>