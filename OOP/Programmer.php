<?php

    require_once("Person.php");

    class Programmer extends Person{

        private $language;
        private $level;

        function programming(){
            $this->name;
            
        }

        public function __construct($name, $language){
           $this->name = $name;
           $this->setLanguage($language);
        }

        public function getLanguage() {
            return $this->language;
        }
        
        public function setLanguage($language): self {
            $this->language = $language;
            return $this;
        }

        public function getLevel() {
            return $this->level;
        }
        
        public function setLevel($level): self {
            $this->level = $level;
            return $this;
        }
    }

    $junior = new Programmer("Junior", "Java");
    echo $junior->getLanguage();

    $anonymous_class =  new class {
        public $name;
        public $idade;

        function test(){
            echo "Testando";
        }
    };

    echo "<br>";
    $anonymous_class->test();
?>