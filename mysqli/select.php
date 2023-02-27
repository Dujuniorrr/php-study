<?php
    $host = "localhost";
    $user = "root";
    $pass = "dfsj461910";
    $db = "CLINICA";

    $conn = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM PACIENTE";
    $result = $conn->query($sql);

    // $patient = $result->fetch_assoc();
    // print_r($patient);

    $patients = $result->fetch_all();
    print_r($patients);

    $conn->close();
?>