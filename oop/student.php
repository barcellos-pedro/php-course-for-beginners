<?php

require_once './exam.php';

class Student extends Human implements Exam {
    private $name;
    private $age;

    public function __construct($height, $weight, $sign, $name, $age)
    {
        // Like super() in other languages
        parent::__construct($height, $weight, $sign);
        
        $this->name = $name;
        $this->age = $age;
    }

    // Interface method
    public function doExam() {
        // Accessing parent method
        $sign = parent::getSign();
        echo "As i'm the student $this->name, i will do my exam. And my sign is $sign";
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

?>