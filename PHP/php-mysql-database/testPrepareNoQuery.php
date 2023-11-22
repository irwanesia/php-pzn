<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

// $username = "admin';#";
$username = "qira";
$password = "123";

// selain query select prepare ini juga bisa digunakan dalam penggunaan query sperti 
// update, delete, insert
$sql = "INSERT INTO admin(username, password) VALUES(:user,:pass)";
$result = $conn->prepare($sql);
$result->bindParam("user", $username);
$result->bindParam("pass", $password);
$result->execute();

$conn = null;