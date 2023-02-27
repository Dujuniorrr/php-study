<?php
    $host = "localhost";
    $user = "root";
    $pass = "dfsj461910";
    $db = "CLINICA";

    $conn = new mysqli($host, $user, $pass, $db);

    $sql = "INSERT INTO PACIENTE VALUES ('222.333.111-091', 'Matheus', 29, 'M')";
    $conn->query($sql);
    $conn->close();
?>