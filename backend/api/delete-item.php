<?php
header('Content-Type: application/json; charset=utf-8');

//dichiaro i dati del imput
$input_data = json_decode(file_get_contents('php://input'), true);
$item = $input_data['item'];
$index = $input_data['index'];

$list_todo = json_decode(file_get_contents('../data/list.json'), true);

    unset($list_todo[$index]);
    $list_todo = array_values($list_todo);
    //var_dump($list_todo);
    $json_data = json_encode($list_todo, JSON_PRETTY_PRINT);
    file_put_contents('../data/list.json', $json_data);

    echo json_encode($list_todo);


