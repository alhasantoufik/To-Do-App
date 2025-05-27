<?php
include '../db.php';
$title = $_POST['title'];
$desc = $_POST['description'];
$stmt = $pdo->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
$stmt->execute([$title, $desc]);
