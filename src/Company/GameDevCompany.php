<?php

namespace Cettervescre\Company;

use Cettervescre\Company\Employee\Designer;
use Cettervescre\Company\Employee\Programmer;
use Cettervescre\Company\Employee\Tester;

class GameDevCompany extends Company
{
    public function getEmployees()
    {
        return [
            new Designer(),
            new Programmer(),
            new Tester()
        ];
    }
}