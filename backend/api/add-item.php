<?php
header('Content-Type: application/json; charset=utf-8');

$input_data = json_decode(file_get_contents('php://input'), true);
$list_todo = json_decode(file_get_contents('../data/list.json'), true);

// Crea il nuovo item
$new_item = [
    'value' => $input_data['value'],
    'done' => false,
];
// add item
$list_todo[] = $new_item;


$json_data = json_encode($list_todo);
file_put_contents('../data/list.json', $json_data);

echo json_encode($list_todo);