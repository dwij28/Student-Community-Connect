<?php
 
    class Job {

        public $location;
        public $type;
        public $salary;
        public $daysPerWeek;
        public $hoursPerDay;
        public $owner;

        function __construct($location, $type, $salary, $daysPerWeek, $hoursPerDay, $owner) {

            $this->location = $location;
            $this->type = $type;
            $this->salary = $salary;
            $this->daysPerWeek = $daysPerWeek;
            $this->hoursPerDay = $hoursPerDay;
            $this->owner = $owner;

        }

        public function createJob($db) {

            $query = "INSERT INTO JobVacancy (location, type, salary, daysPerWeek, hoursPerDay, owner) 
                      VALUES('$this->location', '$this->type', $this->salary, $this->daysPerWeek, $this->hoursPerDay, '$this->owner')";
                      
            mysqli_query($db, $query);
            header("location: done.php");

            return true;

        }

    }

?>