<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    td {
      width: 30px;
      height: 30px;
    }
  </style>
</head>

<body>

  <table>
    <tr>
      <?php for($i=0; $i<256; $i+=17): ?>
      <td style="background-color: rgb(<?= $i ?>,0,0)"></td>
      <?php endfor ?>
    </tr>
  </table>
</body>

</html>