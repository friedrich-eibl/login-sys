<?php

$serverName = "localhost";
$dbUser = "dbuser";
$dbPwd = "1234";
$dbName = "login_sys";

$conn = mysqli_connect($serverName, $dbUser, $dbPwd, $dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}