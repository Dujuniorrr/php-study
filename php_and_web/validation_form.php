<?php

    $validations = [];

    if(count($_POST)){

        if($_POST['car_name'] === ""){
            $validations[] = "Por favor, preencha o nome do carro";
        }

        if($_POST['price'] === ""){
            $validations[] = "Por favor, preencha o preço do carro";
        }
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
    if(count($validations)):
    ?>
    <ul>
    <?php foreach($validations as $validation): ?>
        <li><?= $validation ?></li>
    <?php endforeach; ?>
    </ul>
    <?php
    endif;
    ?>
    <form action="validation_form.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="text" name="car_name" placeholder="Digite o nome do carro">
        </div>
        <div>
            <input type="text" name="price" placeholder="digite o preco do carro">
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>