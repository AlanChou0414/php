<?php
# include './connect_db.php';
require './connect_db.php';

$sql = "SELECT * FROM address_book";
$stmt = $pdo->query($sql);

// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// $row = $stmt->fetch(PDO::FETCH_NUM);
$row = $stmt->fetch();

header('Content-Type: application/json');
echo json_encode($row, JSON_UNESCAPED_UNICODE);
