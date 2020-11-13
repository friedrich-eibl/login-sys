<?php

$serverName = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "login-sys";

$conn = mysqli_connect($serverName, $dbUser, $dbPwd, $dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}