<?php

    $sum_before_multiplication = (4 + 4) * 2;
    $sum_after_multiplication = 4 + 4 * 2;

    echo "$sum_before_multiplication -- $sum_after_multiplication";

    $value_operation = (200 * 2) / 4;

    echo "<br> $value_operation";

    //auto cast
    $value = 5 / 2;
    $value = "5" * 12;
    $value = (int) "5"; //casting
    echo "<br>" . $value . "<br>"; //concatenar 
    $value = 5 ** 2;
    echo "<br>" . $value . "<br>";
    $value++;
    echo "<br>" . $value . "<br>";
    $value += 5;
    echo "<br>" . $value . "<br>";
    $value--;
    echo "<br>" . $value . "<br>";

    $number = 5;
    $string = "5";

    if($number == $string){
        echo "<br> Correct <br>";
    }

    if($number === $string){
         echo "<br> Correct <br> <br>";
    }
    else{
        echo "<br> Incorrect <br> <br>";
    }

    $number = (int) [7,2,5];
    echo $number;

    //operador ternario
    echo 5 == 2 ? "A" : "B";

?>