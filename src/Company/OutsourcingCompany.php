<?php

namespace Cettervescre\Company;

use Cettervescre\Company\Employee\Designer;
use Cettervescre\Company\Employee\Tester;

class OutsourcingCompany extends Company
{
    public function getEmployees()
    {
        return [
            new Designer(),
            new Tester()
        ];
    }
}