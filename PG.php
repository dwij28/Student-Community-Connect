<?php
 
    class PG {

        public $pgName;
        public $pgType;
        public $location;
        public $rent;
        public $vacancy;
        public $owner;

        function __construct($pgName, $pgType, $location, $rent, $vacancy, $owner) {

            $this->pgName = $pgName;
            $this->pgType = $pgType;
            $this->location = $location;
            $this->rent = $rent;
            $this->vacancy = $vacancy;
            $this->owner = $owner;

        }

    }

?>