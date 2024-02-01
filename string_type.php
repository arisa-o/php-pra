<?php

$s = "Hello";
var_dump($s);

// １文字目にアクセス
echo $s[1] , "\n";

// [e]  Hは［０］

// マルチバイト文字（全角文字）
$multi_string = "あいうえお";
var_dump($multi_string);
echo $multi_string[0] , "\n";

// 「数字」と「数値」
$num_i = 123;
$num_s ="123";
var_dump($num_i);
var_dump($num_s);

// クォートの違い
$double_s = "num is {$num_i} \n";
$single_s = 'num is {$num_i} \n';
var_dump($double_s);
var_dump($single_s);

// シングルクォートは改行・展開をしない