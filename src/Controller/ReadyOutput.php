<?php

declare(strict_types=1);

namespace livecoding\Tasks\Controller;

class ReadyOutput
{
    public function ready($dataNumber, $number = array())
    {
        $number[$dataNumber] = implode('', $number[$dataNumber]);
        if (empty($number[$dataNumber])) {
            $number[$dataNumber] = $dataNumber;
        }

        return $number;
    }
}
