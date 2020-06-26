<?php
    include 'frog.php';
    include 'ape.php';

    class Animal {
        public $name;
        public $legs = 2;
        public $cold_blooded = false;

        public function __construct($name){
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }
        function get_cold_blooded() {
            return $this->cold_blooded ? "true" : "false";
        }
        function get_leg_amount() {
            return $this->legs;
        }
    }
?>