<?php

namespace Cettervescre\SOLID\S;

class TimeSheetReport
{
    public function print(Employee $employee)
    {
        return 'Printing timesheet report for ' . $employee->getName();
    }
}