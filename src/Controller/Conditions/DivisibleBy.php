<?php

declare(strict_types=1);

namespace livecoding\Tasks\Controller\Conditions;

class DivisibleBy
{
    public function output($dataNumber, $operationNumber, $output = '')
    {
        return ($dataNumber % $operationNumber === 0) ? $output: null;
    }
}
