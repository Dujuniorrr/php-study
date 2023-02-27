<?php
    $host = "localhost";
    $user = "root";
    $pass = "dfsj461910";
    $db = "CLINICA";

    $conn = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM PACIENTE";
    $result = $conn->query($sql);
    print_r($result);
    $conn->close();
?>