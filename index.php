<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="x-ua-compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<form action="new_todo.php" method="post">
    <label>
        <input type="text" name="todo_name" placeholder="Enter your todo here"
    </label>
    <button type="submit">New ToDo</button>
</form>

<?php

$json = file_get_contents('todo.json');
$todo_list = json_decode($json, true);

foreach ($todo_list as $todo): ?>
    <div>
        <label>
            <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : '' ?>>
        </label>
        <?php echo $todo['text'] ?>
        <form action="delete.php" method="post">
            <input type="hidden" name = "todo_name" value=<?php echo $todo['text']?>>
            <button>Delete</button>
        </form>
    </div>
<?php endforeach; ?>
</body>
</html>
