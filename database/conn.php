<?php
$dbname = 'posted';
$dbpassword = '';
$dbusername = 'root';
$dbserver = 'localhost';

$conn = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Database under construction!!!!" . $conn->connect_error);
}
