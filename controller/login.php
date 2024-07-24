<?php
$username = $_POST["username"];
$password = $_POST["password"];

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->execute();
$user = $stmt->fetch();
if ($user) {
    $_SESSION["user_idx"] = $user["user_idx"];
    $_SESSION["username"] = $user["username"];
    $_SESSION["mb_level"] = $user["mb_level"];
}
header("Location: /");