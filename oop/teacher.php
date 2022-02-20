<?php

require_once './exam.php';

class Teacher implements Exam {
    private string $subject;
    private string $name;
    // Nullable typed attr
    private ?int $age;

    public function __construct(string $subject, string $name, int $age)
    {
        $this->subject = $subject;
        $this->name = $name;
        $this->age = $age;
    }

    public function doExam() {
        $date = date('F j Y', strtotime('today'));
        echo "As I am the teacher $this->name, i will give the exam today at $date";
    }

    public static function fromString($string) {
        $data = explode('-', $string);
        return new Teacher($data[0], $data[1], $data[2]);
    }

    public function getSubject() : string {
        return $this->subject;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getAge() : string {
        return $this->age;
    }

    public function setSubject(string $subject) : void {
        $this->subject = $subject;
    }

    public function setName(string $name) : void {
        $this->name = $name;
    }

    public function setAge(int $age) : void {
        $this->age = $age;
    }
}

?>