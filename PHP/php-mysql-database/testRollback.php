<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

$conn->beginTransaction();

$conn->exec("INSERT INTO comments(email, comment)VALUES('Budi','ini comment')");
$conn->exec("INSERT INTO comments(email, comment)VALUES('Andi','ini comment')");
$conn->exec("INSERT INTO comments(email, comment)VALUES('Rina','ini comment')");

$conn->rollBack();

$conn = null;