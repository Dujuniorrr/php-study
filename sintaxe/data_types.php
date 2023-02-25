<?php

    if(!is_null(1)){
        echo "is not null";
    }
    echo is_int(2);
    echo true;
    $a = 10;
    $a = "Oi";
    $a = 1.4;
    $array = [1, 2, 3];
    echo "<br>";
    print_r($array);
    echo "<br><br> $array[2] <br>";
    $array['name'] = 'Junior';
    $array = ['name' => 'Junior', 'age' => 20];
    echo "<br><br> $array[age] <br>";
    print_r($array);
    echo "<br> Contatenando string com $a <br>";
    echo '<br> Contatenando string com $a <br>';

    echo '<br>';

    if(is_int($a)){
        echo "Is int";
    }
    else if(is_float($a)){
        echo 'Is float';
    }
    else if(is_string($a)){
        echo "Is string";
    }
    else{
        echo "Is other type";
    }

    class Person{

        function speak(){
            echo "<br> Olá pessoal";
        }
        
    }

    $junior = new Person();
    $junior->speak();
?>