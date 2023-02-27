<?php

    if(isset($_COOKIE['name'])){
        $name = $_COOKIE['name'];
    }
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
    <?php
        if($name):
    ?>
        <h1>Seja bem vindo <?= $name ?></h1>
    <?php
        else:
    ?>
    <h1>Olá mundo</h1>
    <?php
        endif
    ?>
</body>
</html>