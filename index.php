<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>To-Do App</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>To-Do List</h2>
        <form id="taskForm">
            <input type="text" name="title" placeholder="Enter task title" required>
            <textarea name="description" placeholder="Task description (optional)"></textarea>
            <button type="submit">Add Task</button>
        </form>

        <div id="taskList"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/script.js"></script>
</body>
</html>
