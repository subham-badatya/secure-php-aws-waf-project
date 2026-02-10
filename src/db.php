<?php
$host = "php-database.cr2i2oc261c5.ap-south-1.rds.amazonaws.com";
$user = "admin";
$pass = "subham123";
$db   = "php1";   // 👈 ACTUAL DATABASE NAME

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
