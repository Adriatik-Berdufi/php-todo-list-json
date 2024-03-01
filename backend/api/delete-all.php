<?php
header('Content-Type: application/json; charset=utf-8');

$list_todo = json_decode(file_get_contents('../data/list.json'), true);

// Svuota la array
$list_todo = array();

$json_data = json_encode($list_todo);
file_put_contents('../data/list.json', $json_data);


echo json_encode($list_todo);



