<?php

require_once './exam.php';
require_once './teacher.php';
require_once './student.php';

class ExamMessage {
    // public static function teacherExam(Teacher $teacher) {
    //     $teacher->doExam();
    // }

    // public static function studentExam(Student $student) {
    //     $student->doExam();
    // }

    /**
     * Dependecy Inversion - 'D' on SOLID
     * 
     * This method depend on abstractions, not on concretions.
     * Unlike the methods above.
     * If we depend on concretions, we will need one method
     * for each class that implements Exam Interface.
     * 
     * https://medium.com/@tbaragao/solid-d-i-p-dependency-inversion-principle-e87527f8d0be
     */
    public static function doExam(Exam $anyone) {
        $anyone->doExam();
    }
}

?>