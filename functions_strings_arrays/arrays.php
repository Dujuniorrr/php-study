<?php

    $array = ["carro" => "BMW"];
    for($i = 0; $i < 10; $i++){
        $array[$i] = $i + 1;
    }

    $array[] = 120;

    print_r($array);

    echo "<br>" . $array['carro'];

    $array = range(0, 10, 2);

    echo "<br><br>" . count($array);
    echo "<br><br>";
    print_r($array);
    echo "<br><br>";

    $array_multi = [
        [1, 2, 3],
        [4, 5, 6]
    ];

    echo $array_multi[0][1];

    $person = ['Junior', 20, 'Dev', "Brasil"];

    list($name, $age, $job) = array_slice($person, 0, 3);

    echo "<br><br>" . $name . " " . $age . " " .  $job;

    array_splice($person, -1);

    print_r($person);

    $person = [
        'nome' => 'Junior',
        'idade' => 20,
        'trabalho' => 'dev'
    ];

    foreach($person as $carac => $value){
        echo "<br>" . $carac . " " . $value;
    }

    echo "<br><br>";

    $array2 = array_merge($array, $person);
    print_r($array2);

    $array2 = ["carro" => "BMW"];
    for($i = 4; $i < 10; $i++){
        $array2[$i] = $i + 1;
    }


    echo "<br><br>";

    print_r(array_diff($array, $array2));
?>