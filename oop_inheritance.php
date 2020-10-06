<?php 
	class Student{
		protected $studentID;
		public $studentName;
		public $studentYr;
		public $studentCourse;
		public $studentGWA;

		function __construct($id, $name){
			$this->studentID = $id;
			$this->studentName = $name;
		}

		protected function setStudentID($id){
			$this->studentID = $id;
		}

		protected function getStudentID(){
			return $this->studentID;
		}

		public function setSID($id){
			$this->setStudentID($id);
		}

		function printStudentID(){
			echo $this->getStudentID();
		}

		function __destruct(){
			//echo "test";
		}

	}

	class StudentPrimary extends Student {
		function setStudentID($id){
			Student::setStudentID($id);
		}
		final function getStudentID(){
			return Parent::getStudentID();
		}
	}

	class StudentSecondary extends Student{
		var $studentSubjNo;


		function setStudentSubjNo($num){
			$this->studentSubjNo = $num;
		}

		function getStudentSubjNo(){
			return $this->studentSubjNo;
		}

		function setStudentID($id){
			$this->studentID = "xxx".$id;
		}
	}

	final class StudentTransfer extends StudentSecondary{
		function setStudentID($id){
			$this->id = "xxx".$id."xxx";
		}

		function getsStudentID(){
			
		}

		function getOriginalSetStudID($id){
			Student::setStudentID($id);
			Parent::setStudentID($id);
			Self::setStudentID($id);
		}
	}

?>