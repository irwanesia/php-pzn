<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

// $username = "admin';#";
$username = "irwan";
$password = "bismillah";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $conn->prepare($sql);
$result->bindParam(1, $username);
$result->bindParam(2, $password);
$result->execute();

$success = false;
$find_user = null;

foreach($result as $row){
    // sukses login/atau input data admin
    $success = true;
    $find_user = $row['username'];
}

if($success) {
    echo "Sukses Login " .$find_user. PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

$conn = null;