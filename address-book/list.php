<?php
require './parts/connect_db.php';

$sql = "SELECT * FROM address_book ORDER BY sid DESC LIMIT 0, 20";

$rows = $pdo->query($sql)->fetchAll();


?>
<?php include './parts/html-head.php' ?>
<?php include './parts/navbar.php' ?>
<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>

      </table>

    </div>
  </div>
</div>
<?php include './parts/scripts.php' ?>
<?php include './parts/html-foot.php' ?>