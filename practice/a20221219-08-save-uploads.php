<?php

header('Content-Type: application/json');

$success = false;
$error = '';
// 判斷是否為空 或 字串
if (!empty($_FILES['avatar'] and is_string($_FILES['avatar']['name']))) {
    // 操作上傳的檔案
    if (
        move_uploaded_file(
            $_FILES['avatar']['tmp_name'],
            './../uploads/' . $_FILES['avatar']['name']
        )
    ) {
        $success = true;
    } else {
        $error = '搬移失敗';
    }
}


echo json_encode([
    'success' => $success,
    'FILES' => $_FILES,
    'error' => $error
]);

?>


<!-- 
{
    "avatar": {
        "name": "batman.jpg",
        "full_path": "batman.jpg",
        "type": "image/jpeg",
        "tmp_name": "C:\\xampp\\tmp\\php7018.tmp",
        "error": 0,
        "size": 174638
    }
}


// 多個檔案
{
    "photos": {
        "name": [
            "4.png",
            "25.png"
        ],
        "full_path": [
            "4.png",
            "25.png"
        ],
        "type": [
            "image/png",
            "image/png"
        ],
        "tmp_name": [
            "C:\\xampp\\tmp\\php9BAA.tmp",
            "C:\\xampp\\tmp\\php9BAB.tmp"
        ],
        "error": [
            0,
            0
        ],
        "size": [
            41099,
            39472
        ]
    }
} 
-->