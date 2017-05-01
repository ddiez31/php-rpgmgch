<?php

class Vegetable extends Product {
    private $productorName;
    private $expiresAt;
    public function __construct($productorName, $expiresAt) {
        $this->productorName = $productorName;
        $this->expiresAt = $expiresAt;
    }
    public function getProductorName() {
        return $this->productorName;
    }
    public function setProductorName($data) {
        $this->productorName = $data;
    }
    public function getExpiresAt() {
        return $this->expiresAt;
    }
    public function setExpiresAt($data) {
        $this->expiresAt = $data;
    }
    public function isFresh() {
        switch($expiresAt) {
            case $expiresAt<date('d.m.y'): return true; break;
            case $expiresAt>date('d.m.y'): return false; break;
        }
    }
}


?>
