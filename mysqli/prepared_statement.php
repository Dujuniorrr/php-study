<?php
    $host = "localhost";
    $user = "root";
    $pass = "dfsj461910";
    $db = "CLINICA";

    $conn = new mysqli($host, $user, $pass, $db);

    $cpf = "222.222.223-09";
    $name = "João";
    $age = 20;
    $sex = "M";

    $stmt = $conn->prepare("INSERT INTO PACIENTE VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $cpf, $name, $age, $sex); //s = String, i = integer, d = double
    $stmt->execute();
    $conn->close();
?>