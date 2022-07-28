<?php

/**
 * @return mysqli|void
 */
function dbConnect()
{

    static $connect = null;

    if ($connect == null) {
        $host = 'localhost';
        $user = 'root';
        $password = 'root';
        $dbName = 'test_db';
        $connect = mysqli_connect($host, $user, $password, $dbName) or die('Connection Error');
    }

    return $connect;
}
