<?php

// 伺服端回應給用戶端的檔頭
header('Content-Type: application/json');


echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

