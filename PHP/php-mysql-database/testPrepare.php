<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

// $username = "admin';#";
$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = :user AND password = :pass;";
$result = $conn->prepare($sql);
$result->bindParam("user", $username);
$result->bindParam("pass", $password);
$result->execute();

$success = false;
$find_user = null;

foreach($result as $row){
    // sukses login/atau input data admin
    $success = true;
    $find_user = $row['username'];
}

if($success) {
    echo "Sukses Login" .$find_user. PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

$conn = null;