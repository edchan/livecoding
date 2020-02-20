<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use livecoding\Tasks\Controller\ReadyOutput;
use livecoding\Tasks\Controller\Conditions\DivisibleBy;
use livecoding\Tasks\Controller\Conditions\EqualTo;
use livecoding\Tasks\Controller\Conditions\GreaterThan;

$output = new ReadyOutput();
$divisible = new DivisibleBy();
$equal = new EqualTo();
$greater = new GreaterThan();

// Output for Task 1;
print "Task v1:\n";
$minNum = 1;
$maxNum = 20;
for ($i = $minNum; $i <= $maxNum; $i++) {
    $numbers1[$i] = [
      $divisible->output($i, 3, 'pa'),
      $divisible->output($i, 5, 'pow')
    ];

    $numbers1 = $output->ready($i, $numbers1);
}
print implode(' ', $numbers1) . "\n";

// Output for Task 2;
print "Task v2:\n";
$minNum = 1;
$maxNum = 15;
for ($i = $minNum; $i <= $maxNum; $i++) {
    $numbers2[$i] = [
      $divisible->output($i, 2, 'hatee'),
      $divisible->output($i, 7, 'ho')
    ];

    $numbers2 = $output->ready($i, $numbers2);
}
print implode('-', $numbers2) . "\n";

// Output for Task 3;
print "Task v3:\n";
$minNum = 1;
$maxNum = 10;
for ($i = $minNum; $i <= $maxNum; $i++) {
    $numbers3[$i] = [
      $equal->output($i, 1, 'joff'),
      $equal->output($i, 4, 'joff'),
      $equal->output($i, 9, 'joff'),
      $greater->output($i, '5', 'tchoff')
    ];

    $numbers3 = $output->ready($i, $numbers3);
}
print implode('-', $numbers3) . "\n";
