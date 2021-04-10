<?php

namespace Cettervescre\Company;

abstract class Company
{
    abstract public function getEmployees();

    public function createSoftware()
    {
        $employees = $this->getEmployees();

        foreach ($employees as $employee) {
            $employee->doWork();
        }

        return 'Created..';
    }
}