<?php

    include_once("config/url.php");
    include_once("connection.php");
    include_once("dao/CarDAO.php");

    $car = new CarDAO($conn);
    $new_car = new Car;
    $new_car->setBrand($brand = $_POST['brand']);
    $new_car->setColor($color = $_POST['color']);
    $new_car->setMileage($mileage = $_POST['mileage']);
    $car->add_car($new_car);
    
    header("Location:" . $BASE_URL . "index.php");
    
?>