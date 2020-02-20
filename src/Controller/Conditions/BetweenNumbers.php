<?php

declare(strict_types=1);

namespace livecoding\Tasks\Controller\Conditions;

class BetweenNumbers
{
  public function output($dataNumber, $minNumber, $maxNumber, $output = '')
  {
      return ($dataNumber >= $minNumber && $dataNumber <= $maxNumber) ? $output: null;
  }
}