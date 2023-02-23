<?<php>

// Get Post Data (Json)
$Json = file_get_contents("php://input");

// converts it into a php object

$data = Json_decode($Json);

// echos the data back to make sure the data is sent

echo Json_encode($data);




</php>