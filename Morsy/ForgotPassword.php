<?php

// To Read Data From Post Request Body like Backend
$json_in =  json_decode(file_get_contents('php://input'), true);

$json_out = new \stdClass();

if ($json_in['UserEmail'] == "mahmoud_morsy@live.com")
{
	header("HTTP/1.1 200");
    $json_out->ReturnMsg = "An Email has been Sent to change your Forgotten Password to mahmoud_morsy@live.com.";
}
else if ($json_in['UserEmail'] == "mahmoud_morsy_wrong@live.com")
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "User Doesn't Exist";
}
else
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "An Error Occurred";
}

$json_out = json_encode($json_out);

echo $json_out;
?>
