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

*/