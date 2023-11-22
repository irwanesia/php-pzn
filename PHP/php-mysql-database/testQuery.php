<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

$sql = "SELECT * FROM customers";
$PDOStatement = $conn->query($sql);

foreach($PDOStatement as $row) {
    // echo $row['id'].PHP_EOL;
    // echo $row['nama'].PHP_EOL;
    // echo $row['email'].PHP_EOL;
    var_dump($row);
}


$conn = null;