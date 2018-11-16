<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "crusoette";
$dbname = "employee";

$connect = new mysqli($localhost, $username, $password, $dbname);

if ($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
} else {
    echo "Successfully connected";
}

