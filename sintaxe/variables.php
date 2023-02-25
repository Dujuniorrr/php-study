<?php

    $integer_number = 1 + 5;
    $decimal_number = 2.5;
    $word = "Palavra";
    $sum = $integer_number + $decimal_number;

    echo "$integer_number $decimal_number $word $sum ";

    //variavel de varivavel
    $x = "name"; //<-- name - var global
    $$x = "Junior"; //<-- name = "Junior"
    echo $name; //< -- name aponta para $$x

    //variavel por referencia
    $y = 10;
    $z =& $y;
    echo " $z $y";

    $z = 15;

    echo " $z $y";

    //////////////////////////////////////// scope 

    echo "<br><br>";

    $x = 15;

    function scopeLocal(){
        $x = 10; //var local
        echo "<br> $x local";
    }

    function testingGlobal(){
        global $x;
        $x = 5;
    }

    echo "$x global";
    scopeLocal();
    testingGlobal();

    echo "<br> $x global";

    echo "<br><br>";

    function scopeStatic(){
        static $x = 0;
        $x++;
        echo "<br> $x";
    }

    scopeStatic();
    scopeStatic();
    scopeStatic();
    
    function parameter($a, $b){
        echo "<br><br>";
        echo $a + $b;
    }

    parameter(5, 5);
?>