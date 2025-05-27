#  To-Do App 
**(PHP + MySQL + jQuery(javascript)**
**Data Communication : AJAX (No page Reloads)**

A simple and lightweight task management app built using **PHP**, **MySQL**, and **jQuery**. This app allows users to create, view, update, complete, and delete tasks in real time with a responsive and clean interface.

---

##  Features

-  Add new tasks with title and optional description
-  View all tasks sorted by creation date
-  Edit task title and description
-  Mark tasks as done/undone
-  Delete tasks
-  Real-time updates without page reload using jQuery AJAX
-  Secure database operations using PDO and prepared statements

---

##  Technologies Used

- **Frontend:** HTML, CSS, jQuery, JavaScript
- **Backend:** PHP (PDO for database interaction)
- **Database:** MySQL

---

##  Project Structure
todo-app/
│
├── index.php # Main frontend interface
├── db.php # Database connection file
├── ajax/ # All AJAX-handling PHP scripts
│ ├── add_task.php
│ ├── delete_task.php
│ ├── fetch_tasks.php
│ ├── toggle_status.php
│ └── update_task.php
├── assets/
│ ├── style.css # Custom styles
│ └── script.js # All jQuery/AJAX interactions
└── README.md # This file
