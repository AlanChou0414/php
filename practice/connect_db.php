<?php
$db_host = 'localhost';
$db_name = 'mfee30';
$db_user = 'root';
$db_pass = '';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";

$pdo = new PDO($dsn, $db_user, $db_pass);
