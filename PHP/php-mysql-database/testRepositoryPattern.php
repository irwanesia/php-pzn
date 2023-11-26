<?php

require_once __DIR__ . '/GetConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

use Model\comment;
use Repository\CommentRepositoryImpl;

$conn = getConnection();
$repository = new CommentRepositoryImpl($conn);

// test insert
// $comment = new Comment(email: 'ucok@test.com', comment: 'Hi Ucok');
// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

// test findById
// $comment = $repository->findById(13);
// var_dump($comment);

// test findAll
$comments = $repository->findAll();
var_dump($comments);

$conn = null;