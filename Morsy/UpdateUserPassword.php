<?php

// To Read Data From Post Request Body like Backend
$json_in =  json_decode(file_get_contents('php://input'), true);

$json_out = new \stdClass();

if ($json_in['token'] == "xYzAbCdToKeN" && $json_in['OldUserPassword'] == "Mah1142019")
{
	header("HTTP/1.1 200");
    $json_out->ReturnMsg = "Update Successful";
}
else if ($json_in['token'] == "xYzAbCdToKeN" && $json_in['OldUserPassword'] == "Mah1142020")
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "Invalid Old password.";
}
else if ($json_in['token'] == "xYzAbCdToKeN_Wrong")
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "Invalid token.";
}
else if ($json_in['token'] == "xYzAbCdToKeN_NotExist")
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