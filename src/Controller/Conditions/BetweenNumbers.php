<?php

declare(strict_types=1);

namespace livecoding\Tasks\Controller\Conditions;

class BetweenNumbers
{
    public function output($dataNumber, $operationNumber, $output = '')
    {
        list($minNumber, $maxNumber) = $operationNumber;
        return ($dataNumber >= $minNumber && $dataNumber <= $maxNumber) ? $output: null;
    }
}
