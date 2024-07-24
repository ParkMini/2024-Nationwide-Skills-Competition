<?php
$username = $_POST["username"];
$password = $_POST["password"];
$name = $_POST["name"];
$mb_level = $_POST["mb_level"];

$stmt = $pdo->prepare("INSERT INTO users (username, password, mb_level) VALUES(:username, :password, :mb_level)");
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->bindParam(":mb_level", $mb_level);
$stmt->execute();
header("Location: /");