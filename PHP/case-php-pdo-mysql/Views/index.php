<?php

require_once __DIR__ ."/../Repository/TodolistRepository.php";
require_once __DIR__ ."/../Config/Database.php";

use Repository\TodolistRepositoryImpl;

$conn = \Config\Database::getConnection();
$repository = new TodolistRepositoryImpl($conn);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Todolist</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Todolist</th>
        </tr>
        <tr>
            <?php 
            $data = $repository->findAll();
            var_dump($data);
            ?>
            <td></td>
        </tr>
    </table>
</body>

</html>