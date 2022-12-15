<?php
require './parts/connect_db.php';
header('Content-Type: application/json');

$output = [
  'success' => false,
  'postData' => $_POST,
  'code' => 0,
  'errors' => []
];

if(empty($_POST['name'])) {
  $output['errors']['name'] = '沒有姓名資料';
  echo json_encode($output, JSON_UNESCAPED_UNICODE);
  exit;
}

// TODO: 欄位資料檢查

$sql = "INSERT INTO `address_book`(
  `name`, `email`, `mobile`, 
  `birthday`, `address`, `created_at`
  ) VALUES (
    ?,?,?,
    ?,?, NOW()
  )";

$stmt = $pdo->prepare($sql);

$stmt->execute([
  $_POST['name'],
  $_POST['email'],
  $_POST['mobile'],
  $_POST['birthday'],
  $_POST['address'],
]);

$output['success'] = !! $stmt->rowCount();

echo json_encode($output, JSON_UNESCAPED_UNICODE);
