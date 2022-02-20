<?php

require_once './exam.php';

class Principal implements Exam {
    // Short syntax for constructor
    public function __construct(
        public string $school,
        public string $name,
        public int $age
    ) { }

    public function doExam() {
        echo "As I am the principal $this->name, i will check the exams.";
    }
}

?>