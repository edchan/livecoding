<?php

declare(strict_types=1);

namespace livecoding\Tasks\Controller\Conditions;

class GreaterThan
{
    public function output($dataNumber, $operationNumber, $output = '')
    {
        return ($dataNumber > $operationNumber) ? $output: null;
    }
}
