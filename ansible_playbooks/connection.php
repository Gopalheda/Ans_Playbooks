<?php
// server info
$server = 'localhost';
$user = 'root';
$pass = 'mysql';
$db = 'inventory';
/connect to the database
$mysql = new mysqli($server, $user, $pass, $db);
mysqli_report(MYSQLI_REPORT_ERROR)
