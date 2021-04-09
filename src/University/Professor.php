<?php

namespace Cettervescre\University;

use Cettervescre\University\Student;
use Cettervescre\University\Course;

class Professor
{
    protected Student $student;

    public function teach(Course $c)
    {
        $this->student->learn($c->getKnowledge());
    }

    public function setStudent(Student $student)
    {
        $this->student = $student;
    }
}