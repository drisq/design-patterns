<?php

namespace Cettervescre\University;

class Course
{
    protected $course;
    protected $units;

    public function __construct($course, $units)
    {
        $this->course = $course;
        $this->units = $units;
    }

    public function getKnowledge()
    {
        return $this;
    }
}