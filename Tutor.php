<?php
 
    class Tutor {

        public $location;
        public $subject;
        public $fees;
        public $daysPerWeek;
        public $session;
        public $owner;

        function __construct($location, $subject, $fees, $daysPerWeek, $session, $owner) {

            $this->location = $location;
            $this->subject = $subject;
            $this->fees = $fees;
            $this->daysPerWeek = $daysPerWeek;
            $this->session = $session;
            $this->owner = $owner;

        }

        public function GiveCoaching($db) {

            $query = "INSERT INTO GiveCoaching (location, subject, fees, daysPerWeek, session, owner) 
                      VALUES('$this->location', '$this->subject', $this->fees, $this->daysPerWeek, '$this->session', '$this->owner')";
            mysqli_query($db, $query);
            header("location: done.php");

            return true;

        }

    }

?>