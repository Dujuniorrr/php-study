<?php
    if(isset($_GET['name'])){
       echo "Seu nome é " . $_GET['name'];
    }
    else{
        echo "Seu nome é padrão";
    }
?>
