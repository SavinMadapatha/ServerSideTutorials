<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, html {
            margin: 60px;
            align-content: center;
        }

        .container  {
            width: 500px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Todo List</h2>
    <form action="<?php echo site_url('todo/add'); ?>" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="todo_item" placeholder="Add new todo item">
        </div>
        <button type="submit" class="btn btn-outline-primary">Add Todo</button>
    </form>

    <ul class="list-group mt-4">
    <h6>Current todo list</h6>
        <?php foreach ($todos as $todo): ?>
            <li class="list-group-item">
                <?php echo $todo->action; ?> 
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
