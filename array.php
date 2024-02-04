<?php

$awk = [123];
var_dump($awk);

$awk2 = [999,"Hello",3.14];
var_dump($awk2);

var_dump($awk2[0]);

$awk2[0] = 6543;
var_dump($awk2[0]);

$awk[] = 1.4142;
$awk[] = "string value";
var_dump($awk);