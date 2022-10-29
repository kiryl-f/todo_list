<?php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="x-ua-compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<form action="new_todo.php" method="post">
    <input type="text" name="todo_name" placeholder="Enter your todo here"
    <button>New ToDo</button>
</form>

<?php
$json = file_get_contents('todo.json');
$todo_list = json_decode($json, true);
//var_dump($todo_list);
foreach ($todo_list as $name => $todo): ?>
    <div>
        <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : '' ?>>
        <?php echo $name ?>
        <form action="delete.php" method="post">
            <input type="hidden" name = "todo_name" value=<?php echo $name?>>
            <button>Delete</button>
        </form>
    </div>
<?php endforeach; ?>
</body>
</html>
