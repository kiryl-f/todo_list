<?php
require ('todo.php');

$todo_name = $_POST['todo_name'];

if($todo_name) {
    $todo = new Todo($todo_name, date("Y-m-d"));
    $json = file_get_contents('todo.json');
    $todo_list = json_decode($json, true);
    $todo_list[] = $todo->toArray();
    var_dump($todo_list);
    file_put_contents('todo.json', json_encode($todo_list));
}

header('Location: index.php');