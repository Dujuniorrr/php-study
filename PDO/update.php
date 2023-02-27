<?php

    $dsn = "pgsql:host=localhost;port=5432;dbname=teste";
    $user = "postgres";
    $pass = "12345678";
    $conn = new PDO($dsn, $user, $pass);
    
    $name = "Junior Ferreira Sobrinho";
    $age = 21;
    $id = 1;
    
    $stmt = $conn->prepare("UPDATE STUDENT SET age = :age, name = :name WHERE id = :id");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":age", $age);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
?>