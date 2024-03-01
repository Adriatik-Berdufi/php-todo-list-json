<?php 
header('Content-Type: application/json; charset=utf-8');
$list_todo = file_get_contents('../data/list.json');
//var_dump($list_todo);



echo $list_todo;