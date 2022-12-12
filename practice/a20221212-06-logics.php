<pre><?php

$c = 5 || 7;
$d = 5 && 0;

$e = 5 or 7;   // 優先權比 = 設定還要低
$f = 5 and 0;  // 優先權比 = 設定還要低

$g = (5 or 7);
$h = (5 and 0);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
?></pre>
