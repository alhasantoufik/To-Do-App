<?php
include '../db.php';

// Check if 'id' is set and is numeric
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = (int) $_POST['id'];

    // Use proper SQL syntax to toggle boolean
    $stmt = $pdo->prepare("UPDATE tasks SET is_done = CASE WHEN is_done = 1 THEN 0 ELSE 1 END WHERE id = ?");
    $stmt->execute([$id]);

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid ID']);
}
