<?php
session_start(); # 啟用 session 功能

$users = [
  'shin' => [
    'pw' => '2345',
    'nickname' => '小新'
  ],
  'ming' => [
    'pw' => '5678',
    'nickname' => '小明'
  ],
];

if (!empty($_POST)) {
  # 如果用戶端有送表單資料出來

  if (!empty($_POST['account']) and !empty($_POST['password'])) {
    # 如果兩欄都有值

    if (!empty($users[$_POST['account']])) {
      # 帳號是對的

      $user = $users[$_POST['account']];
      if ($_POST['password'] === $user['pw']) {
        # 密碼也是對的

        $_SESSION['user'] = [
          'account' => $_POST['account'],
          'nickname' => $user['nickname'],
        ];
      }
    }
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php if (isset($_SESSION['user'])) : ?>
    <h2><?= $_SESSION['user']['nickname'] ?> 您好</h2>
    <div>
      <a href="a20221214-03-logout.php">登出</a>
    </div>
  <?php else : ?>
    <form name="form1" method="post">
      <input type="text" name="account">
      <br>
      <input type="password" name="password">
      <br>
      <input type="submit">
    </form>
  <?php endif ?>





</body>

</html>