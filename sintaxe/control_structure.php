<?php

    if(5 > 2){
        echo "true";
        echo "<br>";
        if(5 < 2){
            echo "false";
        }
        else{
            echo "true";
        }
    }
    else{
        echo "false";
    }

    $x = 3;

    switch($x){
        case 0;
            echo "<br>False";
            break;
        
        case 1:
            echo "<br>1";
            break;

        default:
            echo "<br>False";
    }
?>
