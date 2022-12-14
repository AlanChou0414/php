<?php
session_start(); # 啟用 session 功能

# session_destroy(); // 所有的 session 都清除

unset($_SESSION['user']); // 刪掉陣列裡的元素

header('Location: a20221214-02-login.php'); // redirect 轉向到別的頁面
