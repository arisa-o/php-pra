<?php

$i = random_int(1,999);
$j = random_int(1,999);

//加算
$k = $i + $j;

echo "{$i} + {$j} = {$k} \n";

//減算
$l = $i - $j;

echo "{$i} - {$j} = {$l} \n";

//掛け算
$n = $i + $j;

echo "{$i} * {$j} = {$n} \n";

//割算
$m = $i / $j;

echo "{$i} / {$j} = {$m} \n";

//　剰余
$o = $i % $j;

echo "{$i} % {$j} = {$o} \n";

// べき乗①
$p = $i ** 3;

echo "{$i} ** 3 = {$p} \n";

//べき乗２
$q = pow($i , 3);

echo "pow({$i}, 3) = {$q} \n";