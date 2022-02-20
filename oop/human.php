<?php

class Human {
    private $height;
    private $weight;
    private $sign;

    public function __construct($height, $weight, $sign) {
        $this->height = $height;
        $this->weight = $weight;
        $this->sign = $sign;
    }

    // Getters and Setters
    public function getHeight() {
        return $this->height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getSign() {
        return $this->sign;
    }

    public function setHeight($height) {
        return $this->height = $height;
    }

    public function setWeight($weight) {
        return $this->weight = $weight;
    }

    public function setSign($sign) {
        return $this->sign = $sign;
    }
}

?>