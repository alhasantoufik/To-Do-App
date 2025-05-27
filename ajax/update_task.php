<?php
include '../db.php';
$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['description'];
$stmt = $pdo->prepare("UPDATE tasks SET title = ?, description = ? WHERE id = ?");
$stmt->execute([$title, $desc, $id]);
