<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		public $courseNum; //courseNum
 	    public $courseTitle; //courseTitle
 	  
 	    public function __construct($courseNum, $courseTitle) {
 	        $this->courseNum   = $courseNum;
 	        $this->courseTitle  = $courseTitle;
    	}
		
 	    public function __toString() {
			return  "The   \"C H I L D\"   course: " . $this->courseNum . " ---------> is titled: " . $this->courseTitle . ".";
    	}
	}
?>