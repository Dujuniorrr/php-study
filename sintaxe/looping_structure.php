<?php

    $a = 10;
    while($a > 0){
        echo "<br>$a<br>";
        $a--;
        if($a == 4) break;
    }

    $a = 10;
    while($a > 0){
        if($a == 5 || $a == 6 || $a == 7){
            $a--;
            continue;
        }
        echo "<br>$a<br>";
        $a--;     
    }

    $arrays = ["a", "b", "c", "d"];
    foreach($arrays as $item){
        echo $item;
    }
?>