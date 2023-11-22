<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

// <<<SQL => string multiline
// $sql = <<<SQL
//     INSERT INTO customers(id, nama, email)
//     VALUES ('a2','irwanesia','irwan@energy.com');
// SQL;

// $sql = <<<SQL
//     INSERT INTO admin(username, password)
//     VALUES ('irwan','bismillah');
// SQL;

$sql = <<<SQL
    INSERT INTO comments(email, comment)
    VALUES ('irwan@codeir.com','bismillah, manjadda wa jadda');
SQL;

$connection->exec($sql);

$connection = null;