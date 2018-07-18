<?php

$data = [
    'id' => $_GET['id'],
    'title'=>$_POST['title'],
    'content' => $_POST['content']

];
$pdo = new PDO("mysql:host=localhost; dbname=Task", "root", "");
$sql = 'UPDATE tasks SET title=:title, content=:content WHERE id=:id';
$stat=$pdo->prepare($sql);
$stat->execute($data);



header("Location: /");exit;
?>