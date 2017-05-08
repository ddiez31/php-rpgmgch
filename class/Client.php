<?php

class Client extends User {
    public function __construct($id, $name, $price, $productorName, $expiresAt) {
	 	parent::__construct($id, $name, $price);
        $this->productorName = $productorName;
        $this->expiresAt = $expiresAt;
    }
    public function buy() {
        // $this->id = $id;
        // $this->email = $email;
        // $this->createdAt = $createdAt;
    }
}


?>
