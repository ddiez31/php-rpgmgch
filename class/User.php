<?php

class User {
    private $id;
    private $email;
    private $createdAt;
    public function __construct($id, $email, $createdAt) {
        $this->id = $id;
        $this->email = $email;
        $this->createdAt = $createdAt;
    }
    public function getId() {
        return $this->id;
    }
    public function setId($data) {
        $this->id = $data;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($data) {
        $this->email = $data;
    }
    public function getCreatedAt() {
        return $this->createdAt;
    }
    public function setCreatedAt($data) {
        $this->createdAt = $data;
    }
}


?>
