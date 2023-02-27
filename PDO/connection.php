<?php
    $dsn = "pgsql:host=localhost;port=5432;dbname=teste";
    $user = "postgres";
    $pass = "12345678";
    $conn = new PDO($dsn, $user, $pass);

    $sql = $conn->prepare("CREATE TABLE STUDENT(id SERIAL PRIMARY KEY, name VARCHAR(255), age INT)");
    $sql->execute();

?>