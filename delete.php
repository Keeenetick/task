<?php
$id = $_GET['id'];
$sql = 'DELETE FROM tasks WHERE id=:id';
$pdo = new PDO("mysql:host=localhost; dbname=Task", "root","");
$stat = $pdo->prepare($sql);
$stat->bindParam(":id",$id);
$stat->execute();

header("Location: /");

?>