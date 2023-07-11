<?php 
    class Allegato{
        public $name;
        public $format;

        function __construct($name, $format){
            $this->name = $name;
            $this->format = $format;
        }

    }
?>