<?php

//controller temporário

$intervalo1 = DateInterval::createFromDateString('9 hours');
$intervalo2 = DateInterval::createFromDateString('6 hours');

$resultado1 = sumIntervals($intervalo1, $intervalo2);
$resultado2 = subtractIntervals($intervalo1, $intervalo2);

print_r($resultado1);
echo('<br>');
print_r($resultado2);
echo('<br>');
print_r(getDateFromInterval($resultado1));
echo('<br>');
print_r(getDateFromInterval($resultado2));