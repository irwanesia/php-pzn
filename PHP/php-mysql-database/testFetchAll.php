<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

var_dump($result->fetchall());


$conn = null;