<?php

namespace App\Service;

use App\Contracts\CalculateServiceContract;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

class DivideCalculateService implements CalculateServiceContract
{
    private $sing =  '/';

    public function calculat($val1, $val2)
    {
        try {
            $div = $val1 / $val2;
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $div;
    }

    public function getSign()
    {
        return $this->sing;
    }
}
