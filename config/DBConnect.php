<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "1234";
$DB_NAME = "gyongju";

$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8";
$pdo = new PDO($dsn, $DB_USER, $DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);