<?php
[
    'title'=>'test',
    'content'=>'test'
];

$pdo = new PDO("mysql:host=localhost; dbname=Task","root","");
$sql = "INSERT INTO tasks(title, content) VALUE(:title,:content)";
$statement = $pdo->prepare($sql);
$r =$statement->execute($_POST);

header('Location: /');exit;