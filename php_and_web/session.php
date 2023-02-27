<?php
    session_start();
    // print_r($_SESSION);
    $_SESSION['name'] = 'Matheus';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Olá <?= $_SESSION['name']; ?></p>
</body>
</html>