<?php
    $method = $_SERVER['REQUEST_METHOD'];
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
    if($method == 'GET'):
   ?>
    <form action="auto_process.php" method="POST">
        <div>
            <input type="text" name="car_name" placeholder="Digite o nome do carro">
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
    <?php 
        else:
    ?>
        <div>
            <p>O nome do carro é <?= $_POST['car_name'] ?></p>
        </div>
    <?php
        endif
    ?>
</body>
</html>