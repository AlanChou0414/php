<?php
require './parts/connect_db.php';

$perPage = 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if($page<1){
  header('Location: ?page=1');
  exit;
}

$t_sql = "SELECT COUNT(1) FROM address_book";
// 總筆數
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 總頁數
$totalPages = ceil($totalRows/$perPage);

$rows = [];
// 如果有資料的話
if(! empty($totalRows)){
  if($page > $totalPages){
    // 頁碼超出範圍時, 轉向到最後一頁
    header('Location: ?page='. $totalPages);
    exit;
  }

  $sql = sprintf(
    "SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s",
    ($page - 1) * $perPage,
    $perPage
  );
  $rows = $pdo->query($sql)->fetchAll();
}






?>
<?php include './parts/html-head.php' ?>
<?php include './parts/navbar.php' ?>
<div class="container">
  <div><?= $totalRows ?></div>
  <div class="row">
    <div class="col">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">姓名</th>
            <th scope="col">電郵</th>
            <th scope="col">手機</th>
            <th scope="col">生日</th>
            <th scope="col">地址</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r) : ?>
            <tr>
              <td><?= $r['sid'] ?></td>
              <td><?= $r['name'] ?></td>
              <td><?= $r['email'] ?></td>
              <td><?= $r['mobile'] ?></td>
              <td><?= $r['birthday'] ?></td>
              <td><?= $r['address'] ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>

      </table>

    </div>
  </div>
</div>
<?php include './parts/scripts.php' ?>
<?php include './parts/html-foot.php' ?>