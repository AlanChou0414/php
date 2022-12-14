<?php
# date_default_timezone_set('Asia/Taipei');

header('Content-Type: text/plain');

$start = strtotime('1995-01-01');
$end = strtotime('2005-01-01') - 1;
# 隨時的時間範圍
for($i=0; $i<20; $i++){
  $t = rand($start, $end);
  echo date("Y-m-d", $t) . "\n";
}
