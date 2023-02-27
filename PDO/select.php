<?php

    $dsn = "pgsql:host=localhost;port=5432;dbname=teste";
    $user = "postgres";
    $pass = "12345678";
    $conn = new PDO($dsn, $user, $pass);
    
    $name = "Junior Ferreira Sobrinho";
    $age = 21;
    $id = 1;
    
    $stmt = $conn->prepare("SELECT * FROM STUDENT");
    $stmt->execute();
    // $students = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($students);

    echo "<br><br>";

    $students2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($students2);
    
?>