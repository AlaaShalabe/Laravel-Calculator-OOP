<?php

namespace App\Contracts;

interface  CalculateServiceContract
{
    public function calculat($val1, $val2);

    public function getSign();
}
