<?php
# include './connect_db.php';
require './connect_db.php';

$sql = "SELECT * FROM address_book LIMIT 5";
$stmt = $pdo->query($sql);

// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// $row = $stmt->fetch(PDO::FETCH_NUM);
$row = $stmt->fetchAll(); // 拿到所有資料

header('Content-Type: application/json');
echo json_encode($row, JSON_UNESCAPED_UNICODE);
