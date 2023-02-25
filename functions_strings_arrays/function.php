<?php

    function invert($a = 0, $b = 0){
        // print_r(func_get_args());
        // print_r(func_num_args() . " ");
        $c = $a;
        $a = $b;
        $b = $c;
        return [$a, $b];
    }

    $a = 10;
    $b = 20;

    echo $a . " " . $b;

    echo "<br>";

    $inverse = invert($a, $b);
    $a = $inverse[0];
    $b = $inverse[1];

    echo $a . " " . $b;


?>
