<?php

    $dsn = "pgsql:host=localhost;port=5432;dbname=teste";
    $user = "postgres";
    $pass = "12345678";
    $conn = new PDO($dsn, $user, $pass);
    
    $name = "Junior Ferreira";
    $age = 20;

    $stmt = $conn->prepare("INSERT INTO STUDENT(name, age) VALUES (:name, :age)");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":age", $age);
    $stmt->execute();
    
?>