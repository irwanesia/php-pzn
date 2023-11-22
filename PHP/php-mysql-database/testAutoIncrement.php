<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

$conn->exec("INSERT INTO comments(email,comment)VALUES('Oman@codeir.com','Skuy lah..')");
// ambil id terakhir atau lihat id terakhir
$id = $conn->lastInsertId();

var_dump($id);

$conn = null;
