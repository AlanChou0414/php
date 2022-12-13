<?php

$ar1 = [
  'name' => '小帥',
  'age' => 25,
];

echo json_encode($ar1, JSON_UNESCAPED_UNICODE); // 編碼成 JSON 字串
// json_decode()
