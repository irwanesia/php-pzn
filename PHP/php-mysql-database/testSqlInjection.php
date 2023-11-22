<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

// manipulati proses sql injection
// $username = "admin';#"; 
// dengan manipulasi sql injection maka proses pengecekan password  akan diskip
// $username = "admin";
// $password = "bukan admin";

// salah satu function mengatasi sql injection dengan quote
$username = $conn->quote("admin';");
$password = $conn->quote("admin bukan");

// $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';";
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password;";

$statement = $conn->query($sql);

$success = false;
$find_user = null;

foreach($statement as $row){
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