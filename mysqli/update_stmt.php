<?php
    $host = "localhost";
    $user = "root";
    $pass = "dfsj461910";
    $db = "CLINICA";

    $conn = new mysqli($host, $user, $pass, $db);

    $cpf = "222.222.223-09";
    $name = "João Vitor";
    $age = 22;
    $sex = "M";

    $stmt = $conn->prepare("UPDATE PACIENTE SET nome_paciente = ?, idade_paciente = ?, sexo_paciente = ? WHERE cpf_paciente = ?");
    $stmt->bind_param("siss", $name, $age, $sex, $cpf); //s = String, i = integer, d = double
    $stmt->execute();
    $conn->close();
?>