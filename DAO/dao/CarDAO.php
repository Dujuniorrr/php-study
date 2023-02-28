<?php

    include_once("model/Car.php");

    class CarDAO implements CarDaoInterface {

        private PDO $conn;

        public function __construct(PDO $conn) {
            $this->setConn($conn);
        }
        
        public function add_car(Car $car){
            $query = "INSERT INTO CAR (brand, mileage, color) VALUES (:brand, :mileage, :color)";
            $stmt = $this->getConn()->prepare($query);
            $stmt->bindValue(":brand", $car->getBrand());
            $stmt->bindValue(":mileage", $car->getMileage());
            $stmt->bindValue(":color", $car->getColor());
            $stmt->execute();
        }

        public function find_all(){
            $stmt = $this->conn->query("SELECT * FROM CAR");
            $stmt->execute();
            $data = $stmt->fetchAll();
            foreach($data as $row){
                $car = new Car;
                $car->setId($row['id']);
                $car->setBrand($row['brand']);
                $car->setColor($row['color']);
                $car->setMileage($row['mileage']);
                $cars[] = $car;
            }

            return $cars;
        }

        public function getConn() {
            return $this->conn;
        }
        

        public function setConn($conn): self {
            $this->conn = $conn;
            return $this;
        }
}

?>