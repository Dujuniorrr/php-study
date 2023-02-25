<?php

    header("Content-type: text/plain");
    $a = 10;
    echo "Valor da variavel a: $a\ntestando\n";
    echo "\tOlha só \$b\n";

    $s = "Junior";
    echo "String size: " . strlen($s) . "\n";

    for($i = 0; $i < strlen($s); $i++){
        echo $s[$i] . "\n";
    }

    $space = " Os espaços em branco estão nessa string "  . "\n";
    $clean = trim($space);
    $clean = rtrim($space);
    $clean = ltrim($space);

    echo $clean  . "\n";
    echo strtoupper($clean) . "\n";
    echo strtolower($clean)  . "\n";
    echo ucfirst($clean) . "\n";
    echo ucwords($clean) . "\n";

    $words = "Este item está em promoção";
    $letters = ["p", "r", "o", "m", "ç", "ã"];
    $cont = 0;
    for($i = 0; $i < strlen($words); $i++){
        foreach($letters as $letter){
            if($words[$i] == $letter){
                if($words[$i] == 'm' && $cont < 2){
                    $cont++;
                    continue;
                }
                $words[$i] = strtoupper($words[$i]);
            }
        }
    }   

    echo lcfirst($words);

    echo "\n" . substr($words, 19,10); //string, indice inicial da substring, comprimento
    echo "\n" . strrev("palavra");
    echo str_repeat( "\n" . "repete ai", 3);

    $array_string = explode(" ", "A B C D E F");
    foreach ($array_string as $char) {
        echo "\n\n" . $char;
    }

    $string_array = implode(",", $array_string);
    echo "\n\n" . $string_array;

    $array_url = parse_url("https://www.google.com/?busca=1");
    print_r($array_url);
?>