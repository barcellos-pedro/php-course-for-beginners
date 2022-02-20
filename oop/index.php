<?php

include '../my-log.php';
require './human.php';
require './person.php';
require './teacher.php';
require './principal.php';
require './student.php';
require './exam-message.php';

$person1 = new Person();
$person1->name = 'Pedro';
$person1->age = 24;
$person1->salary = 1000;

$teacher1 = new Teacher('Math', 'William Schuester', 30);

$principal1 = new Principal('Elite way school', 'Figgins', 40);

$student1 = new Student(1.75, 75, 'Pisces', 'Pedro', 24);

// Using static method
$teacher2 = Teacher::fromString('Portuguese-Betty-40');

ExamMessage::doExam($teacher1);
echo '<br><br>';
ExamMessage::doExam($student1);
echo '<br><br>';
ExamMessage::doExam($principal1);

myLog($person1);
myLog($principal1);

$teacher1->setSubject('Biology');

myLog(
    $teacher1->getSubject(),
    $teacher1->getName(),
    $teacher1->getAge(),
    $teacher1->doExam()
);

echo '<pre>';
print_r($teacher2);
echo '</pre>';

myLog(
    $student1,
    // Student own methods
    $student1->getName(),
    $student1->getAge(),
    // Methods from parent class
    $student1->getHeight(),
    $student1->getWeight(),
    $student1->getSign(),
    // Method from interface
    $student1->doExam()
);

?>