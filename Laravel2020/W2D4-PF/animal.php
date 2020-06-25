<?php
    include 'frog.php';
    include 'ape.php';

    class Animal {
        public $name;
        protected $legs = 2;
        protected $blood = false;

        public function __construct($name){
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }
        function get_cold_blooded() {
            return $this->blood ? "false" : "true";
        }
        function get_leg_amount() {
            return $this->legs;
        }
    }
?>