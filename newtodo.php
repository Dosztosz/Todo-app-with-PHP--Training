<?php


echo '<pre>';
var_dump($_POST);
echo '</pre>';

$todoname = $_POST['todo_name'] ?? false;

if($todoname){
    echo "Save todo";
}
