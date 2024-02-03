<?php

if(true){
	echo "trueならここを通る \n";
}

if(false){
	echo "falseならここを通る \n";
}
// 条件（）内が正しい場合、処理を実行する

$age = 20;
if($age >= 20){
	echo "成人です　\n";
}

if($age < 20){
	echo "未成年です \n";
}

// 条件ならA、以外はB
if($age >= 20){
	echo "成人です \n";
}else{
	echo "未成年です \n";
}