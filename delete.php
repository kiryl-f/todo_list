<?php
$todo_name = $_POST['todo_name'];
echo $todo_name;
$json = file_get_contents('todo.json');
$todo_list = json_decode($json, true);
$i = 0;
foreach($todo_list as $todo) {
    if($todo['text'] === $todo_name) {
        unset($todo_list[$i]);
        break;
    }
    $i++;
}

file_put_contents('todo.json', json_encode(array_values($todo_list)));

header('Location: index.php');