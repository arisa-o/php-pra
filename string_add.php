<?php

$string_1 = "Hello";
$string_2 ="world";

// ドットを使う
$string_dot = $string_1 . $string_2 . "\n";
echo $string_dot;

// ｛｝を使う
$string_dquote = "{$string_1}{$string_2} \n";
echo $string_dquote;