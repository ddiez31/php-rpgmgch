<?php

class Product {
    private $id;
    private $name;
    private $price;
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function getId() {
        return $this->id;
    }
    public function setId($data) {
        $this->id = $data;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($data) {
        $this->name = $data;
    }
    public function getPrice() {
        return $this->price;
    }
    public function setPrice($data) {
        $this->price = $data;
    }
}


?>
