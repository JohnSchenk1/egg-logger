<?php

// Get Post Data (Json)
$Json = file_get_contents("php://input");

// converts it into a php object

$data = json_encode($Json);

// echos the data back to make sure the data is sent

echo json_encode($data);




?>