<?php

// To Read Data From Post Request Body like Backend
$json_in =  json_decode(file_get_contents('php://input'), true);


$json_out = new \stdClass();

if ($json_in['UserEmail'] == "mahmoud_1@live.com")
{
	header("HTTP/1.1 401");
    $json_out->ReturnMsg = "Your account has not been verified.";
}
else if ($json_in['UserEmail'] == "mahmoud_morsy@live.com" && $json_in['UserPassword'] != "Mahmoud123456789")
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "Invalid email or password.";
}
else if ($json_in['UserEmail'] == "mahmoud_morsy@live.com" && $json_in['UserPassword'] == "Mahmoud123456789")
{
	header("HTTP/1.1 200");
    $json_out->ReturnMsg = "Login Successful";
    $json_out->Token = "xYzAbCdToKeN";
    $json_out->UserId = "iiiidddd1142019";
}
else
{
	header("HTTP/1.1 402");
    $json_out->ReturnMsg = "An error occurred!";
}

$json_out = json_encode($json_out);

echo $json_out;
?>

