<?php

namespace Cettervescre\Company;

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