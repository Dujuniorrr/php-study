<?php
    $host = "localhost";
    $user = "root";
    $pass = "dfsj461910";
    $db = "CLINICA";

    $conn = new mysqli($host, $user, $pass, $db);

    // $create = "CREATE TABLE TESTE(id integer auto_increment PRIMARY KEY, name VARCHAR(100), age INT)";
    // $conn->query($create);
    
    $drop = "DROP TABLE TESTE";
    $conn->query($drop);
    $conn->close();
?>