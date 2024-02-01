<?php

// 整数型の確認
$i = 123;
var_dump($i);

// 整数型の最大・最小値の確認
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

// maxを超えた場合
$over_max = PHP_INT_MAX + 1;
var_dump($over_max);

// float(9.223372036854776E+18) となる。int型でない。