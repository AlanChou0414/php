<?php

header('Content-Type: application/json');

echo json_encode($_FILES);

/*
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
*/