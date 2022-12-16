<?php

$pass = '123456';
$hash = '$2y$10$4OXYBO2HYppD.gCCNU9InOlb6UJhxT5XvTvbrcjDr/BSUjtP1psKi';

var_dump(password_verify($pass, $hash));

// $2y$10$1SWETow3j9Lg2ZUy7swOm.ktCp6NgiKtyIYTuO2oj2iePg7L5vUWO
// $2y$10$4OXYBO2HYppD.gCCNU9InOlb6UJhxT5XvTvbrcjDr/BSUjtP1psKi