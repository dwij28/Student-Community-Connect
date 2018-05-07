<?php
 
    class Achievement {

        public $collegeName;
        public $details;

        function __construct($collegeName, $details) {

            $this->collegeName = $collegeName;
            $this->details = $details;

        }

        public function create($db) {

			$query = "INSERT INTO Achievement (collegeName, details) 
		  			VALUES('$this->collegeName', '$this->details')";
	    	
		  	mysqli_query($db, $query);
		  	header("location: done.php");
		  	return true;
	    }

    }

?>