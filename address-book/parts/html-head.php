<?php 
if(isset($title)){
  $title = $title. ' - 小新的網站';
} else {
  $title = '小新的網站';
}
$pageName = $pageName ?? ''; // 如果沒有設定, 就設定為空字串
?>
<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../fontawesome/css/all.css" rel="stylesheet" />
  <title><?= $title ?></title>
</head>

<body>