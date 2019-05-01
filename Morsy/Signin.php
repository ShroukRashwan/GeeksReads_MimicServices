<?php

// To Read Data From Post Request Body like Backend
$json_in =  json_decode(file_get_contents('php://input'), true);


$json_out = new \stdClass();

if ($json_in['UserEmail'] == "mahmoud_1@live.com")
{
	header("HTTP/1.1 401");
    $json_out->ReturnMsg = "Your account has not been verified.";
}
//Mahmoud1234567891 = (MD5) 683baf9b925204422e6fd5bcb1506ff
else if ($json_in['UserEmail'] == "mahmoud_morsy@live.com" && $json_in['UserPassword'] != "b98acc94be7ec5125c48158deeb8a59b")
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "Invalid email or password.";
}
//Mahmoud123456789 = (MD5) b98acc94be7ec5125c48158deeb8a59b
else if ($json_in['UserEmail'] == "mahmoud_morsy@live.com" && $json_in['UserPassword'] == "b98acc94be7ec5125c48158deeb8a59b")
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

