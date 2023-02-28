<?php
    $dsn = "pgsql:host=localhost;port=5432;dbname=DAO_TESTE";
    $user = "postgres";
    $pass = "12345678";
    
    try {
        $conn = new PDO($dsn, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $error = $e->getMessage();
        echo $error;
    }
    
?>