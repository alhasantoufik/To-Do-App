<?php
include '../db.php';
$stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
while ($task = $stmt->fetch()) {
    echo '<div class="task ' . ($task['is_done'] ? 'done' : '') . '">';
    echo '<input type="checkbox" class="toggle-done" data-id="' . $task['id'] . '" ' . ($task['is_done'] ? 'checked' : '') . '> ';
    echo '<strong>' . htmlspecialchars($task['title']) . '</strong><br>';
    echo '<small>' . htmlspecialchars($task['description']) . '</small>';
    echo '<div class="task-actions">';
    echo '<button class="edit" data-id="' . $task['id'] . '" data-title="' . htmlspecialchars($task['title']) . '" data-desc="' . htmlspecialchars($task['description']) . '">Edit</button>';
    echo '<button class="delete" data-id="' . $task['id'] . '">Delete</button>';
    echo '</div>';
    echo '</div>';
}


