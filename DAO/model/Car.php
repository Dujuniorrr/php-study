<?php

    class Car{  
        private $id;
        private $brand;
        private $mileage;
        private $color;

        public function getId() {
            return $this->id;
        }
        
        public function setId($id): self {
            $this->id = $id;
            return $this;
        }

        public function getBrand(){
            return $this->brand;
        }
        
        public function setBrand($brand): self {
            $this->brand = $brand;
            return $this;
        }

        public function getMileage() {
            return $this->mileage;
        }
        
        public function setMileage($mileage): self {
            $this->mileage = intval($mileage);
            return $this;
        }

        public function getColor() {
            return $this->color;
        }
        
        public function setColor($color): self {
            $this->color = $color;
            return $this;
        }

    }

    interface CarDAOInterface{
        public function add_car(Car $car);
        public function find_all();
        
    }
?>