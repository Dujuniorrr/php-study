<?php

    include_once("connection.php");
    include_once("connection.php");
    include_once("dao/CarDAO.php");
    $car = new CarDAO($conn);
    $cars = $car->find_all();
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
    <h1>
        Insira um valor
    </h1>
    <form action="process.php" method="POST">
        <div>
            <label for="brand">Marca do Carro</label>
            <input type="text" name="brand">
        </div>
        <div>
            <label for="color">Cor do Carro</label>
            <input type="text" name="color">
        </div>
        <div>
            <label for="color">Quilometragem do Carro</label>
            <input type="mileage" name="mileage">
        </div>
        <div>
            <button type="submit"> Adicionar</button>
        </div>
    </form>
    <ul>
        <?php foreach($cars as $car): ?>
            <li> <?= $car->getId() . " - " . $car->getBrand() . " - " . $car->getColor() . " - " .$car->getMileage() ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>