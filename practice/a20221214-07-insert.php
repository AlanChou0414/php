<?php
# include './connect_db.php';
require './connect_db.php';

$sql = "INSERT INTO `address_book`(
  `name`, `email`, `mobile`,
  `birthday`, `address`, `created_at`
  ) VALUES (
    ?, ?, ?,
    ?, ?, NOW())";

$stmt = $pdo->prepare($sql);
$stmt->execute([
  "陳小華's dog",
  'wang@gmail.com',
  '374583',
  '1960-12-20',
  '高雄市'
]);


echo json_encode([
  'rowCount' => $stmt->rowCount(),  // 新增幾筆
  'lastInsertId' => $pdo->lastInsertId(), // 最新增加的資料, 主鍵的值
]);
