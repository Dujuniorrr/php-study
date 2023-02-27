<?php
    $host = "localhost";
    $user = "root";
    $pass = "dfsj461910";
    $db = "CLINICA";

    $conn = new mysqli($host, $user, $pass, $db);

    $cpf = "222.222.223-09";
    $stmt = $conn->prepare("DELETE FROM PACIENTE WHERE cpf_paciente = ?");
    $stmt->bind_param("s", $cpf); 
    $stmt->execute();
    $conn->close();
?>