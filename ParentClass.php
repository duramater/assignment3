<?php
	// This is the file for the parent class

	class ParentClass {
		private $courseNum; 	//courseNum
		private $courseTitle; 	//courseTitle

		public function __construct($num, $title) {
			$this->courseNum   = $num;
			$this->courseTitle  = $title;
		}
		public function getCourseNum() {
			return $this->courseNum;
		}
		public function getCourseTitle() {
			return $this->courseTitle;
		}

		public function __toString() {
			return  "The   \"P A R E N T\"   course: " . $this->getCourseNum() . " ---------> is titled: " . $this->getCourseTitle() . ".";
		} 
	}
?>