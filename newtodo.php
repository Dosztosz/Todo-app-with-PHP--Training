<?php

$todoName = $_POST['todo_name'] ?? '';
$todoName = trim($todoName); // removing spacebars?

if($todoName){
    if(file_exists('todo.json')){
        $json = file_get_contents('todo.json'); //Getting content from json filles in array
        $jsonArray = json_decode($json, true); // Decoding Json values
    } else{
        $jsonArray = [];
    }
    
    $jsonArray[$todoName] = ['completed' => false];

    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT)); //putting content set on the index page to the todo.json text, Ważne nauczyć się co to json_encode!


 //   echo '<pre>';
 //   var_dump($jsonArray);
 //   echo '</pre>';
}

header('Location: index.php'); //Moving to location

?>
