<?php

require_once __DIR__ . '/GetConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

use Model\comment;
use Repository\CommentRepositoryImpl;

$conn = getConnection();
$repository = new CommentRepositoryImpl($conn);

$comment = new Comment(email: 'irwan@test.com', comment: 'Hi');
$newComment = $repository->insert($comment);

var_dump($newComment->getId());

$conn = null;