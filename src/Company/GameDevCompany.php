<?php

namespace Cettervescre\Company;

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