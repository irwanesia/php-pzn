<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

$conn->beginTransaction();

$conn->exec("INSERT INTO comments(email, comment)VALUES('Ainboo','ini comment')");
$conn->exec("INSERT INTO comments(email, comment)VALUES('Ainboo','ini comment')");
$conn->exec("INSERT INTO comments(emails, comment)VALUES('TEst','ini comment')");

$conn->commit();

$conn = null;