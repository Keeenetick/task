<?php
$pdo = new PDO("mysql:host=localhost; dbname=Task", "root", "");
$stat=$pdo->prepare("SELECT * FROM tasks");
$stat->execute();
$task = $stat->fetchAll(2);
?>
