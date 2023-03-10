<?php

namespace App\Servic;

use App\Contacts\CalculateServiceContract;

class DivideCalculateServic implements CalculateServiceContract
{
    private $sing =  '/';

    public function calculat($val1, $val2)
    {

        return $val1 / $val2;
    }
    public function getSign()
    {
        return $this->sing;
    }
}
