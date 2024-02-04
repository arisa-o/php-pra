<?php

// 配列の作成
$array = [
	"key1" => "Hello",
	0 => '1st',
	1 => '2nd',
	"key2" => 3.14,
];

// foreach
foreach($array as $k => $v){
	echo "{$k} -> {$v} \n";
}

// key（要素の名前）は受け取らない場合
echo "\n";
foreach($array as $value){
	echo "{$value} \n";
}