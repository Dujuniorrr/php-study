<?php

    class Person{

        public const EYES = 2;
        public const ARMS = 2;

        public $name;
        
        function speak(){
            echo "Olá. Eu me chamo " . $this->name;
        }

        function cont_eyes(){
            echo self::EYES;
        }

}

    // $junior = new Person;
    // $junior->name = "Junior";

    // $matheus = new Person;
    // $matheus->name = "Matheus";

    // echo "<br>";
    // $junior->speak();
    
    // echo "<br>";
    // $matheus->speak();

    // echo "<br>" . $junior::ARMS;

    // echo "<br>";
    // $junior->cont_eyes();

    
?>