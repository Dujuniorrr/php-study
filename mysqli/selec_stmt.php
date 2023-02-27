<?php
    $host = "localhost";
    $user = "root";
    $pass = "dfsj461910";
    $db = "CLINICA";

    $conn = new mysqli($host, $user, $pass, $db);

    $id = "222.222.223-09";

    $stmt = $conn->prepare("SELECT * FROM PACIENTE WHERE cpf_paciente LIKE ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $patients = $result->fetch_row(); //fetch_all()
    $conn->close();

    print_r($patients);
?>