<?php

include $_SERVER['DOCUMENT_ROOT'] . '/task_1/functions/connect.php';

$date = date('Y-m-d');

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit;
} else {
    $query = mysqli_query(dbConnect(), "INSERT INTO show_count (date, count) VALUES ('" . $date . "', '1') ON duplicate KEY UPDATE count = count + 1");
}
