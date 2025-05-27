$(document).ready(function () {
    loadTasks();

    // Add Task
    $('#taskForm').submit(function (e) {
        e.preventDefault();
        $.post('ajax/add_task.php', $(this).serialize(), function () {
            $('#taskForm')[0].reset();
            loadTasks();
        });
    });

    // Load Tasks
    function loadTasks() {
        $.get('ajax/fetch_tasks.php', function (data) {
            $('#taskList').html(data);
        });
    }

    // Delete Task
    $('#taskList').on('click', '.delete', function () {
        if (confirm("Are you sure?")) {
            let id = $(this).data('id');
            $.post('ajax/delete_task.php', { id: id }, function () {
                loadTasks();
            });
        }
    });

    // Toggle Task done status on checkbox change
    $('#taskList').on('change', '.toggle-done', function () {
        let id = $(this).data('id');
        $.post('ajax/toggle_status.php', { id: id }, function () {
            loadTasks();
        });
    });

    // Edit Task
    $('#taskList').on('click', '.edit', function () {
        let id = $(this).data('id');
        let title = prompt("Edit title:", $(this).data('title'));
        let description = prompt("Edit description:", $(this).data('desc'));
        if (title !== null) {
            $.post('ajax/update_task.php', { id, title, description }, function () {
                loadTasks();
            });
        }
    });
});