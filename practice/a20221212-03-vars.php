<?php

$age = 12;
$b = '5';
$c = 'ccc';

# $my_age // snake
# $myAge // camel

echo $age + $b . '<br>';  // . 字串串接
# echo $age + $c . '<br>';  // 發生錯誤
echo $age + intval($c) . '<br>';  // intval() 把字串轉換為整數

/*
1. Error
2. Warning
3. Notice
*/
