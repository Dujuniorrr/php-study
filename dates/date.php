<?php

    $d = date('d/m/y'); //day /month /year
    echo $d;

    echo "<br>";
    $d = date('D/M/Y');
    echo $d;

    $n = 10;
    $d2 = date('d/m/Y', strtotime("$n days")); //aumenta ou decrementa a data atual
    echo "<br>";
    echo $d2;
    $d2 = date('d/m/Y', strtotime("20 years")); //aumenta ou decrementa a data atual
    echo "<br>";
    echo $d2;

    $d3 = mktime(02, 12, 33, 12, 21, 2002);
    $d3 = date("d/m/Y", $d3);
    echo "<br>";
    echo $d3;

    $atual_date = new DateTime();
    echo "<br>";
    print_r($atual_date);
    echo "<br>";
    print_r($atual_date);
    echo "<br>";
    echo $atual_date->format('d/m/Y');
    $atual_date->modify("5 days");
    echo "<br>";
    echo $atual_date->format('d/m/Y');

    $old_date = new DateTime();
    $old_date->setDate(2002,12,21);
    echo "<br>";
    $dif = $atual_date->diff($old_date);
    echo "<br>";
    echo $dif->format('%a days');
    echo "<br>";
    if($old_date > $atual_date){
        echo "verdadeiro";
    }
    else{
        echo "falso";
    }
?>