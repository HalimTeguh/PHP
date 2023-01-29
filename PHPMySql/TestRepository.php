<?php

require_once __DIR__ . "\GetConnection.php";
require_once __DIR__ . "\Model\Comment.php";
require_once __DIR__ . "\Repository\CommentRepository.php";

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(
//     email: "repository@gmail.com",
//     comment: "Hi"
// );

// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

// $comment = $repository->findById(23);
// echo "ID\t: " . $comment->getId() . PHP_EOL;
// echo "Email\t: " . $comment->getEmail() . PHP_EOL;
// echo "Comment\t: " . $comment->getComment() . PHP_EOL;


$comment = $repository->findAll();
var_dump($comment);

$connection = null;