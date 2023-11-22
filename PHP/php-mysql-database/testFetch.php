<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

// $username = "admin';#";
$username = "qira";
$password = "123";

$sql = "SELECT * FROM admin WHERE username = :user AND password = :pass";
$result = $conn->prepare($sql);
$result->bindParam("user", $username);
$result->bindParam("pass", $password);
$result->execute();

if($row = $result->fetch()) {
    echo "Sukses Login " . strtoupper($row["username"]). PHP_EOL;
} else {
    echo "Gagal Login " . PHP_EOL;
}

// var_dump($result->fetchAll());

$conn = null;