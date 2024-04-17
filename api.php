<?php 

//read the json file
$json_array= file_get_contents('dischi.json');

// turn it into a php variable
//$records_array =json_decode($json_array, true);

header('Content-Type: application/json');

//var_dump($records_array);
echo $json_array;