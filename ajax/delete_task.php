<?php
include '../db.php';
$id = $_POST['id'];
$stmt = $pdo->prepare("DELETE FROM tasks WHERE id = ?");
$stmt->execute([$id]);
