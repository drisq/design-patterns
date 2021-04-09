<?php

namespace Cettervescre\University;

class Student
{
    protected $name;
    protected $age;
    protected $studentNumber;
    protected $wisdom = [];

    public function learn($thing)
    {
        $this->wisdom[] = $thing;
    }

    public function learnedCourses()
    {
        return $this->wisdom;
    }
}