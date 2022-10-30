<?php
$todo_name = $_POST['todo_name'];

if($todo_name) {
    $json = file_get_contents('todo.json');
    $todo_list = json_decode($json, true);
    $todo_list[$todo_name] = ['completed' => false];
    file_put_contents('todo.json', json_encode($todo_list));
}

header('Location: index.php');