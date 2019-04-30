<?php

// To Read Data From Post Request Body like Backend
$json_in =  json_decode(file_get_contents('php://input'), true);

$json_out = new \stdClass();

if ($json_in['UserEmail'] == "mahmoud_1@live.com")
{
	header("HTTP/1.1 200");
    $json_out->ReturnMsg = "A verification email has been sent to mahmoud_1@live.com.";
}
else if ($json_in['UserEmail'] == "mahmoud_2@live.com")
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "User already registered.";
}
else
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "An Error Occurred";
}

$json_out = json_encode($json_out);

echo $json_out;
?>
