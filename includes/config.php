<?php
$con = new mysqli("localhost", "root", "", "mobilemart");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (!isset($_SESSION)) {
    session_start();
}
?>
