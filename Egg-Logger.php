<?php

// Get Post Data (Json)
$Json = file_get_contents("php://input");

// // converts it into a php object

$info = json_encode($Json);


$f = fopen("Eggs.json", "a");
    fwrite($f, $Json . "\n" );

// // echos the data back to make sure the data is sent

 echo json_encode($info);




?>