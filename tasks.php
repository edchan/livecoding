<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use livecoding\Tasks\Controller\ReadyOutput;
use livecoding\Tasks\Controller\Conditions\DivisibleBy;
use livecoding\Tasks\Controller\Conditions\EqualTo;
use livecoding\Tasks\Controller\Conditions\GreaterThan;

function renderOutput($label = '', $minNum, $maxNum, $separator, $conditions)
{
    $results = $label ? $label . "\n": '';
    for ($i = $minNum; $i <= $maxNum; $i++) {
        foreach ($conditions as $condition) {
            list($condition_num, $condition_output, $condition_action) = $condition;
            switch ($condition_action) {
                case 'divisible':
                  $divisible = new DivisibleBy();
                  $numbers[$i][] = $divisible->output($i, $condition_num, $condition_output);
                  break;
                case 'equal':
                    $equal = new EqualTo();
                    $numbers[$i][] = $equal->output($i, $condition_num, $condition_output);
                    break;
                case 'greater':
                    $greater = new GreaterThan();
                    $numbers[$i][] = $greater->output($i, $condition_num, $condition_output);
                    break;
            }
        }
        $output = new ReadyOutput();
        $numbers = $output->ready($i, $numbers);
    }
    $results .= implode($separator, $numbers) . "\n";

    return $results;
}

print renderOutput('Task v1:', 1, 20, ' ', array(
  [3, 'pa', 'divisible'],
  [5, 'pow', 'divisible']
));

print renderOutput('Task v2:', 1, 15, '-', array(
  [2, 'hatee', 'divisible'],
  [7, 'ho', 'divisible']
));

print renderOutput('Task v3:', 1, 10, '-', array(
  [1, 'joff', 'equal'],
  [4, 'joff', 'equal'],
  [9, 'joff', 'equal'],
  [5, 'tchoff', 'greater']
));
